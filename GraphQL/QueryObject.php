<?php 

namespace Lince\GraphQL;

final class QueryObject
{
    private $properties;
    public function __construct($properties){
        $this->properties = $properties;
    }

    public function __toString()
    {
        $obj = '{';
        if (!empty($this->properties)){
            foreach ($this->properties as $key => $value){
                if (\is_string($value)) {
                    $value = sprintf('"%s"', $value);
                }
    
                if (\is_bool($value) || \is_float($value)) {
                    $value = var_export($value, true);
                }
    
                if (\is_array($value)){
                    $value = self::printArgs($value, true);
                }
                $values[] = "$key: $value";
            }
            $obj .= implode(', ', $values);
        }
        $obj .= '}';
        return $obj;
    }
}

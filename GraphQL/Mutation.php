<?php

namespace Lince\GraphQL;

final class Mutation
{
    use QueryTrait;

    const KEYWORD = 'mutation';
    const GENERATED_NAME_PREFIX = 'mutation_';
}

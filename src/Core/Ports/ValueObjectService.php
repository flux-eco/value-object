<?php
/*
 * fluxcapacitor - microservice framework for business domains and business logic
 * Copyright (C) 2021 martin@fluxlabs.ch
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace FluxEco\ValueObject\Core\Ports;

use FluxEco\ValueObject\Core\Domain;


class ValueObjectService
{
    public function __construct()
    {

    }

    public static function new(): self
    {
        return new self();
    }

    public function createArrayFromMapping(array $data, array $keyMappingKeyArray): array {
        $returnArray = [];
        foreach($data as $key => $value) {
            if(key_exists($key, $keyMappingKeyArray)) {
                $returnArray[$keyMappingKeyArray[$key]] = $value;
            }
        }
        return $returnArray;
    }


    final public function newStringObject(string $value): Domain\Models\StringObject
    {
        return Domain\Models\StringObject::new($value);
    }
}
<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity\marketplaceMetadata\specificationMappings;

class marketplaceMetadata extends Model
{
    /**
     * @var specificationMappings[]
     */
    public $specificationMappings;
    protected $_name = [
        'specificationMappings' => 'SpecificationMappings',
    ];

    public function validate()
    {
        if (\is_array($this->specificationMappings)) {
            Model::validateArray($this->specificationMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->specificationMappings) {
            if (\is_array($this->specificationMappings)) {
                $res['SpecificationMappings'] = [];
                $n1 = 0;
                foreach ($this->specificationMappings as $item1) {
                    $res['SpecificationMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecificationMappings'])) {
            if (!empty($map['SpecificationMappings'])) {
                $model->specificationMappings = [];
                $n1 = 0;
                foreach ($map['SpecificationMappings'] as $item1) {
                    $model->specificationMappings[$n1] = specificationMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

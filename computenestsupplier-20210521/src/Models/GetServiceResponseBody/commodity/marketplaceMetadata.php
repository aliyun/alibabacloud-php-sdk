<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\marketplaceMetadata\meteringEntityExtraInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\marketplaceMetadata\meteringEntityMappings;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\marketplaceMetadata\specificationMappings;

class marketplaceMetadata extends Model
{
    /**
     * @var meteringEntityExtraInfos[]
     */
    public $meteringEntityExtraInfos;
    /**
     * @var meteringEntityMappings[]
     */
    public $meteringEntityMappings;
    /**
     * @var specificationMappings[]
     */
    public $specificationMappings;
    protected $_name = [
        'meteringEntityExtraInfos' => 'MeteringEntityExtraInfos',
        'meteringEntityMappings'   => 'MeteringEntityMappings',
        'specificationMappings'    => 'SpecificationMappings',
    ];

    public function validate()
    {
        if (\is_array($this->meteringEntityExtraInfos)) {
            Model::validateArray($this->meteringEntityExtraInfos);
        }
        if (\is_array($this->meteringEntityMappings)) {
            Model::validateArray($this->meteringEntityMappings);
        }
        if (\is_array($this->specificationMappings)) {
            Model::validateArray($this->specificationMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meteringEntityExtraInfos) {
            if (\is_array($this->meteringEntityExtraInfos)) {
                $res['MeteringEntityExtraInfos'] = [];
                $n1                              = 0;
                foreach ($this->meteringEntityExtraInfos as $item1) {
                    $res['MeteringEntityExtraInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->meteringEntityMappings) {
            if (\is_array($this->meteringEntityMappings)) {
                $res['MeteringEntityMappings'] = [];
                $n1                            = 0;
                foreach ($this->meteringEntityMappings as $item1) {
                    $res['MeteringEntityMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->specificationMappings) {
            if (\is_array($this->specificationMappings)) {
                $res['SpecificationMappings'] = [];
                $n1                           = 0;
                foreach ($this->specificationMappings as $item1) {
                    $res['SpecificationMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MeteringEntityExtraInfos'])) {
            if (!empty($map['MeteringEntityExtraInfos'])) {
                $model->meteringEntityExtraInfos = [];
                $n1                              = 0;
                foreach ($map['MeteringEntityExtraInfos'] as $item1) {
                    $model->meteringEntityExtraInfos[$n1++] = meteringEntityExtraInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['MeteringEntityMappings'])) {
            if (!empty($map['MeteringEntityMappings'])) {
                $model->meteringEntityMappings = [];
                $n1                            = 0;
                foreach ($map['MeteringEntityMappings'] as $item1) {
                    $model->meteringEntityMappings[$n1++] = meteringEntityMappings::fromMap($item1);
                }
            }
        }

        if (isset($map['SpecificationMappings'])) {
            if (!empty($map['SpecificationMappings'])) {
                $model->specificationMappings = [];
                $n1                           = 0;
                foreach ($map['SpecificationMappings'] as $item1) {
                    $model->specificationMappings[$n1++] = specificationMappings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

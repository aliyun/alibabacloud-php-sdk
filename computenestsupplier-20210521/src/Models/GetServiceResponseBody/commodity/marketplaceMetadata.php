<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\marketplaceMetadata\meteringEntityExtraInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\marketplaceMetadata\meteringEntityMappings;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\marketplaceMetadata\specificationMappings;
use AlibabaCloud\Tea\Model;

class marketplaceMetadata extends Model
{
    /**
     * @description The configurations of the billable items.
     *
     * @var meteringEntityExtraInfos[]
     */
    public $meteringEntityExtraInfos;

    /**
     * @description The billable items that are associated with the package.
     *
     * @var meteringEntityMappings[]
     */
    public $meteringEntityMappings;

    /**
     * @description The mappings between the service specifications and the template or package.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meteringEntityExtraInfos) {
            $res['MeteringEntityExtraInfos'] = [];
            if (null !== $this->meteringEntityExtraInfos && \is_array($this->meteringEntityExtraInfos)) {
                $n = 0;
                foreach ($this->meteringEntityExtraInfos as $item) {
                    $res['MeteringEntityExtraInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->meteringEntityMappings) {
            $res['MeteringEntityMappings'] = [];
            if (null !== $this->meteringEntityMappings && \is_array($this->meteringEntityMappings)) {
                $n = 0;
                foreach ($this->meteringEntityMappings as $item) {
                    $res['MeteringEntityMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->specificationMappings) {
            $res['SpecificationMappings'] = [];
            if (null !== $this->specificationMappings && \is_array($this->specificationMappings)) {
                $n = 0;
                foreach ($this->specificationMappings as $item) {
                    $res['SpecificationMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return marketplaceMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MeteringEntityExtraInfos'])) {
            if (!empty($map['MeteringEntityExtraInfos'])) {
                $model->meteringEntityExtraInfos = [];
                $n                               = 0;
                foreach ($map['MeteringEntityExtraInfos'] as $item) {
                    $model->meteringEntityExtraInfos[$n++] = null !== $item ? meteringEntityExtraInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MeteringEntityMappings'])) {
            if (!empty($map['MeteringEntityMappings'])) {
                $model->meteringEntityMappings = [];
                $n                             = 0;
                foreach ($map['MeteringEntityMappings'] as $item) {
                    $model->meteringEntityMappings[$n++] = null !== $item ? meteringEntityMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpecificationMappings'])) {
            if (!empty($map['SpecificationMappings'])) {
                $model->specificationMappings = [];
                $n                            = 0;
                foreach ($map['SpecificationMappings'] as $item) {
                    $model->specificationMappings[$n++] = null !== $item ? specificationMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

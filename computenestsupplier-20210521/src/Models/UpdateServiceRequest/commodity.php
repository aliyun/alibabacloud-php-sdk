<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity\componentsMappings;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity\meteringEntityExtraInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity\meteringEntityMappings;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity\specificationMappings;
use AlibabaCloud\Tea\Model;

class commodity extends Model
{
    /**
     * @var componentsMappings[]
     */
    public $componentsMappings;

    /**
     * @var meteringEntityExtraInfos[]
     */
    public $meteringEntityExtraInfos;

    /**
     * @var meteringEntityMappings[]
     */
    public $meteringEntityMappings;

    /**
     * @var string
     */
    public $saasBoostConfig;

    /**
     * @var specificationMappings[]
     */
    public $specificationMappings;
    protected $_name = [
        'componentsMappings'       => 'ComponentsMappings',
        'meteringEntityExtraInfos' => 'MeteringEntityExtraInfos',
        'meteringEntityMappings'   => 'MeteringEntityMappings',
        'saasBoostConfig'          => 'SaasBoostConfig',
        'specificationMappings'    => 'SpecificationMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentsMappings) {
            $res['ComponentsMappings'] = [];
            if (null !== $this->componentsMappings && \is_array($this->componentsMappings)) {
                $n = 0;
                foreach ($this->componentsMappings as $item) {
                    $res['ComponentsMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (null !== $this->saasBoostConfig) {
            $res['SaasBoostConfig'] = $this->saasBoostConfig;
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
     * @return commodity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentsMappings'])) {
            if (!empty($map['ComponentsMappings'])) {
                $model->componentsMappings = [];
                $n                         = 0;
                foreach ($map['ComponentsMappings'] as $item) {
                    $model->componentsMappings[$n++] = null !== $item ? componentsMappings::fromMap($item) : $item;
                }
            }
        }
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
        if (isset($map['SaasBoostConfig'])) {
            $model->saasBoostConfig = $map['SaasBoostConfig'];
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

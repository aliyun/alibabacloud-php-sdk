<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity\componentsMappings;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity\meteringEntityExtraInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity\meteringEntityMappings;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity\specificationMappings;

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
        'componentsMappings' => 'ComponentsMappings',
        'meteringEntityExtraInfos' => 'MeteringEntityExtraInfos',
        'meteringEntityMappings' => 'MeteringEntityMappings',
        'saasBoostConfig' => 'SaasBoostConfig',
        'specificationMappings' => 'SpecificationMappings',
    ];

    public function validate()
    {
        if (\is_array($this->componentsMappings)) {
            Model::validateArray($this->componentsMappings);
        }
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
        if (null !== $this->componentsMappings) {
            if (\is_array($this->componentsMappings)) {
                $res['ComponentsMappings'] = [];
                $n1 = 0;
                foreach ($this->componentsMappings as $item1) {
                    $res['ComponentsMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->meteringEntityExtraInfos) {
            if (\is_array($this->meteringEntityExtraInfos)) {
                $res['MeteringEntityExtraInfos'] = [];
                $n1 = 0;
                foreach ($this->meteringEntityExtraInfos as $item1) {
                    $res['MeteringEntityExtraInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->meteringEntityMappings) {
            if (\is_array($this->meteringEntityMappings)) {
                $res['MeteringEntityMappings'] = [];
                $n1 = 0;
                foreach ($this->meteringEntityMappings as $item1) {
                    $res['MeteringEntityMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->saasBoostConfig) {
            $res['SaasBoostConfig'] = $this->saasBoostConfig;
        }

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
        if (isset($map['ComponentsMappings'])) {
            if (!empty($map['ComponentsMappings'])) {
                $model->componentsMappings = [];
                $n1 = 0;
                foreach ($map['ComponentsMappings'] as $item1) {
                    $model->componentsMappings[$n1] = componentsMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MeteringEntityExtraInfos'])) {
            if (!empty($map['MeteringEntityExtraInfos'])) {
                $model->meteringEntityExtraInfos = [];
                $n1 = 0;
                foreach ($map['MeteringEntityExtraInfos'] as $item1) {
                    $model->meteringEntityExtraInfos[$n1] = meteringEntityExtraInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MeteringEntityMappings'])) {
            if (!empty($map['MeteringEntityMappings'])) {
                $model->meteringEntityMappings = [];
                $n1 = 0;
                foreach ($map['MeteringEntityMappings'] as $item1) {
                    $model->meteringEntityMappings[$n1] = meteringEntityMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SaasBoostConfig'])) {
            $model->saasBoostConfig = $map['SaasBoostConfig'];
        }

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

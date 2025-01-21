<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\cssMetadata\componentsMappings;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\cssMetadata\meteringEntityExtraInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\cssMetadata\meteringEntityMappings;

class cssMetadata extends Model
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
    protected $_name = [
        'componentsMappings'       => 'ComponentsMappings',
        'meteringEntityExtraInfos' => 'MeteringEntityExtraInfos',
        'meteringEntityMappings'   => 'MeteringEntityMappings',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentsMappings) {
            if (\is_array($this->componentsMappings)) {
                $res['ComponentsMappings'] = [];
                $n1                        = 0;
                foreach ($this->componentsMappings as $item1) {
                    $res['ComponentsMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

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
                $n1                        = 0;
                foreach ($map['ComponentsMappings'] as $item1) {
                    $model->componentsMappings[$n1++] = componentsMappings::fromMap($item1);
                }
            }
        }

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

        return $model;
    }
}

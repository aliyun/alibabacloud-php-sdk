<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateProjectRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\CreateProjectRequest\tryOnParams\clothInfos;

class tryOnParams extends Model
{
    /**
     * @var int[]
     */
    public $clothIds;

    /**
     * @var clothInfos[]
     */
    public $clothInfos;
    protected $_name = [
        'clothIds' => 'ClothIds',
        'clothInfos' => 'ClothInfos',
    ];

    public function validate()
    {
        if (\is_array($this->clothIds)) {
            Model::validateArray($this->clothIds);
        }
        if (\is_array($this->clothInfos)) {
            Model::validateArray($this->clothInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clothIds) {
            if (\is_array($this->clothIds)) {
                $res['ClothIds'] = [];
                $n1 = 0;
                foreach ($this->clothIds as $item1) {
                    $res['ClothIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clothInfos) {
            if (\is_array($this->clothInfos)) {
                $res['ClothInfos'] = [];
                $n1 = 0;
                foreach ($this->clothInfos as $item1) {
                    $res['ClothInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClothIds'])) {
            if (!empty($map['ClothIds'])) {
                $model->clothIds = [];
                $n1 = 0;
                foreach ($map['ClothIds'] as $item1) {
                    $model->clothIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClothInfos'])) {
            if (!empty($map['ClothInfos'])) {
                $model->clothInfos = [];
                $n1 = 0;
                foreach ($map['ClothInfos'] as $item1) {
                    $model->clothInfos[$n1] = clothInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

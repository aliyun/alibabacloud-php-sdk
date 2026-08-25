<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam\tagTreeLevelParam\tagTreeLevels;

class tagTreeLevelParam extends Model
{
    /**
     * @var int[]
     */
    public $tagIds;

    /**
     * @var tagTreeLevels[]
     */
    public $tagTreeLevels;
    protected $_name = [
        'tagIds' => 'TagIds',
        'tagTreeLevels' => 'TagTreeLevels',
    ];

    public function validate()
    {
        if (\is_array($this->tagIds)) {
            Model::validateArray($this->tagIds);
        }
        if (\is_array($this->tagTreeLevels)) {
            Model::validateArray($this->tagTreeLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagIds) {
            if (\is_array($this->tagIds)) {
                $res['TagIds'] = [];
                $n1 = 0;
                foreach ($this->tagIds as $item1) {
                    $res['TagIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagTreeLevels) {
            if (\is_array($this->tagTreeLevels)) {
                $res['TagTreeLevels'] = [];
                $n1 = 0;
                foreach ($this->tagTreeLevels as $item1) {
                    $res['TagTreeLevels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = [];
                $n1 = 0;
                foreach ($map['TagIds'] as $item1) {
                    $model->tagIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TagTreeLevels'])) {
            if (!empty($map['TagTreeLevels'])) {
                $model->tagTreeLevels = [];
                $n1 = 0;
                foreach ($map['TagTreeLevels'] as $item1) {
                    $model->tagTreeLevels[$n1] = tagTreeLevels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

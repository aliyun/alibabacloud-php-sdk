<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachCheatDetectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachCheatDetectionResponseBody\voiceCheat\comparisonList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachCheatDetectionResponseBody\voiceCheat\originalList;

class voiceCheat extends Model
{
    /**
     * @var comparisonList[]
     */
    public $comparisonList;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var originalList[]
     */
    public $originalList;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'comparisonList' => 'comparisonList',
        'desc' => 'desc',
        'originalList' => 'originalList',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->comparisonList)) {
            Model::validateArray($this->comparisonList);
        }
        if (\is_array($this->originalList)) {
            Model::validateArray($this->originalList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comparisonList) {
            if (\is_array($this->comparisonList)) {
                $res['comparisonList'] = [];
                $n1 = 0;
                foreach ($this->comparisonList as $item1) {
                    $res['comparisonList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->originalList) {
            if (\is_array($this->originalList)) {
                $res['originalList'] = [];
                $n1 = 0;
                foreach ($this->originalList as $item1) {
                    $res['originalList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['comparisonList'])) {
            if (!empty($map['comparisonList'])) {
                $model->comparisonList = [];
                $n1 = 0;
                foreach ($map['comparisonList'] as $item1) {
                    $model->comparisonList[$n1] = comparisonList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['originalList'])) {
            if (!empty($map['originalList'])) {
                $model->originalList = [];
                $n1 = 0;
                foreach ($map['originalList'] as $item1) {
                    $model->originalList[$n1] = originalList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

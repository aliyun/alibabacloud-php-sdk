<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectIPCObjectResponseBody\data;

use AlibabaCloud\Dara\Model;

class elements extends Model
{
    /**
     * @var int[]
     */
    public $box;

    /**
     * @var float
     */
    public $score;

    /**
     * @var float
     */
    public $targetRate;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'box' => 'Box',
        'score' => 'Score',
        'targetRate' => 'TargetRate',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->box)) {
            Model::validateArray($this->box);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->box) {
            if (\is_array($this->box)) {
                $res['Box'] = [];
                $n1 = 0;
                foreach ($this->box as $item1) {
                    $res['Box'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->targetRate) {
            $res['TargetRate'] = $this->targetRate;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Box'])) {
            if (!empty($map['Box'])) {
                $model->box = [];
                $n1 = 0;
                foreach ($map['Box'] as $item1) {
                    $model->box[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['TargetRate'])) {
            $model->targetRate = $map['TargetRate'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

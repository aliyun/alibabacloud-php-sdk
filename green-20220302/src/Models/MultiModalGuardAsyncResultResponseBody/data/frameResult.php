<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultResponseBody\data\frameResult\frames;

class frameResult extends Model
{
    /**
     * @var frames[]
     */
    public $frames;

    /**
     * @var int
     */
    public $sliceNum;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'frames' => 'Frames',
        'sliceNum' => 'SliceNum',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        if (\is_array($this->frames)) {
            Model::validateArray($this->frames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frames) {
            if (\is_array($this->frames)) {
                $res['Frames'] = [];
                $n1 = 0;
                foreach ($this->frames as $item1) {
                    $res['Frames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sliceNum) {
            $res['SliceNum'] = $this->sliceNum;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['Frames'])) {
            if (!empty($map['Frames'])) {
                $model->frames = [];
                $n1 = 0;
                foreach ($map['Frames'] as $item1) {
                    $model->frames[$n1] = frames::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SliceNum'])) {
            $model->sliceNum = $map['SliceNum'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}

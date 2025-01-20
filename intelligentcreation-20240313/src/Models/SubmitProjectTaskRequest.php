<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames;

class SubmitProjectTaskRequest extends Model
{
    /**
     * @var frames[]
     */
    public $frames;
    /**
     * @var string
     */
    public $scaleType;
    /**
     * @var int
     */
    public $subtitleTag;
    /**
     * @var int
     */
    public $transparentBackground;
    protected $_name = [
        'frames'                => 'frames',
        'scaleType'             => 'scaleType',
        'subtitleTag'           => 'subtitleTag',
        'transparentBackground' => 'transparentBackground',
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
                $res['frames'] = [];
                $n1            = 0;
                foreach ($this->frames as $item1) {
                    $res['frames'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scaleType) {
            $res['scaleType'] = $this->scaleType;
        }

        if (null !== $this->subtitleTag) {
            $res['subtitleTag'] = $this->subtitleTag;
        }

        if (null !== $this->transparentBackground) {
            $res['transparentBackground'] = $this->transparentBackground;
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
        if (isset($map['frames'])) {
            if (!empty($map['frames'])) {
                $model->frames = [];
                $n1            = 0;
                foreach ($map['frames'] as $item1) {
                    $model->frames[$n1++] = frames::fromMap($item1);
                }
            }
        }

        if (isset($map['scaleType'])) {
            $model->scaleType = $map['scaleType'];
        }

        if (isset($map['subtitleTag'])) {
            $model->subtitleTag = $map['subtitleTag'];
        }

        if (isset($map['transparentBackground'])) {
            $model->transparentBackground = $map['transparentBackground'];
        }

        return $model;
    }
}

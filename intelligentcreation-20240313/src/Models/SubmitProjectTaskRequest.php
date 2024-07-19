<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames;
use AlibabaCloud\Tea\Model;

class SubmitProjectTaskRequest extends Model
{
    /**
     * @description frame
     *
     * @var frames[]
     */
    public $frames;

    /**
     * @example 9:16
     *
     * @var string
     */
    public $scaleType;

    /**
     * @example 1
     *
     * @var int
     */
    public $subtitleTag;
    protected $_name = [
        'frames'      => 'frames',
        'scaleType'   => 'scaleType',
        'subtitleTag' => 'subtitleTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frames) {
            $res['frames'] = [];
            if (null !== $this->frames && \is_array($this->frames)) {
                $n = 0;
                foreach ($this->frames as $item) {
                    $res['frames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scaleType) {
            $res['scaleType'] = $this->scaleType;
        }
        if (null !== $this->subtitleTag) {
            $res['subtitleTag'] = $this->subtitleTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitProjectTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['frames'])) {
            if (!empty($map['frames'])) {
                $model->frames = [];
                $n             = 0;
                foreach ($map['frames'] as $item) {
                    $model->frames[$n++] = null !== $item ? frames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['scaleType'])) {
            $model->scaleType = $map['scaleType'];
        }
        if (isset($map['subtitleTag'])) {
            $model->subtitleTag = $map['subtitleTag'];
        }

        return $model;
    }
}

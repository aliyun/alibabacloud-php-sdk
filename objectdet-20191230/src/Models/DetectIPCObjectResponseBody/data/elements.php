<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectIPCObjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var int[]
     */
    public $box;

    /**
     * @example 0.7138671875
     *
     * @var float
     */
    public $score;

    /**
     * @example 0.8566723958333333
     *
     * @var float
     */
    public $targetRate;

    /**
     * @example DOG
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'box'        => 'Box',
        'score'      => 'Score',
        'targetRate' => 'TargetRate',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->box) {
            $res['Box'] = $this->box;
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

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Box'])) {
            if (!empty($map['Box'])) {
                $model->box = $map['Box'];
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

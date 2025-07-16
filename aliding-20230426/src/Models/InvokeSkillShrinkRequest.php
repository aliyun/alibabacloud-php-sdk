<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class InvokeSkillShrinkRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $paramsShrink;

    /**
     * @description This parameter is required.
     *
     * @example a1d033dd-xxxx-49cf-b49b-2068081bb551
     *
     * @var string
     */
    public $skillId;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'paramsShrink' => 'Params',
        'skillId' => 'SkillId',
        'stream' => 'Stream',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramsShrink) {
            $res['Params'] = $this->paramsShrink;
        }
        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeSkillShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Params'])) {
            $model->paramsShrink = $map['Params'];
        }
        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}

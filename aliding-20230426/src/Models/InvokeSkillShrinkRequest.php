<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class InvokeSkillShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $paramsShrink;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
     */
    public $sourceIdOfAssistantId;
    protected $_name = [
        'paramsShrink' => 'Params',
        'skillId' => 'SkillId',
        'stream' => 'Stream',
        'sourceIdOfAssistantId' => 'sourceIdOfAssistantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->sourceIdOfAssistantId) {
            $res['sourceIdOfAssistantId'] = $this->sourceIdOfAssistantId;
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
        if (isset($map['Params'])) {
            $model->paramsShrink = $map['Params'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        if (isset($map['sourceIdOfAssistantId'])) {
            $model->sourceIdOfAssistantId = $map['sourceIdOfAssistantId'];
        }

        return $model;
    }
}

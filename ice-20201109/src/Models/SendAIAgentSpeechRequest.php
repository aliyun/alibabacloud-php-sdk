<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SendAIAgentSpeechRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableInterrupt;

    /**
     * @description This parameter is required.
     *
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'enableInterrupt' => 'EnableInterrupt',
        'instanceId'      => 'InstanceId',
        'text'            => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableInterrupt) {
            $res['EnableInterrupt'] = $this->enableInterrupt;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendAIAgentSpeechRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableInterrupt'])) {
            $model->enableInterrupt = $map['EnableInterrupt'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}

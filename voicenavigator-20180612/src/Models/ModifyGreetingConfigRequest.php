<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ModifyGreetingConfigRequest extends Model
{
    /**
     * @var string
     */
    public $greetingWords;

    /**
     * @example 12f407b22cbe4890ac595f09985848d5
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $intentTrigger;

    /**
     * @example chatbotIntent
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'greetingWords' => 'GreetingWords',
        'instanceId'    => 'InstanceId',
        'intentTrigger' => 'IntentTrigger',
        'sourceType'    => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->greetingWords) {
            $res['GreetingWords'] = $this->greetingWords;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intentTrigger) {
            $res['IntentTrigger'] = $this->intentTrigger;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGreetingConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GreetingWords'])) {
            $model->greetingWords = $map['GreetingWords'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntentTrigger'])) {
            $model->intentTrigger = $map['IntentTrigger'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ModifyGreetingConfigRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $greetingWords;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $intentTrigger;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'greetingWords' => 'GreetingWords',
        'sourceType'    => 'SourceType',
        'intentTrigger' => 'IntentTrigger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->greetingWords) {
            $res['GreetingWords'] = $this->greetingWords;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->intentTrigger) {
            $res['IntentTrigger'] = $this->intentTrigger;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['GreetingWords'])) {
            $model->greetingWords = $map['GreetingWords'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['IntentTrigger'])) {
            $model->intentTrigger = $map['IntentTrigger'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class AssociateChatbotInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $chatbotInstanceId;

    /**
     * @var string
     */
    public $chatbotName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'chatbotInstanceId' => 'ChatbotInstanceId',
        'chatbotName'       => 'ChatbotName',
        'instanceId'        => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatbotInstanceId) {
            $res['ChatbotInstanceId'] = $this->chatbotInstanceId;
        }
        if (null !== $this->chatbotName) {
            $res['ChatbotName'] = $this->chatbotName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateChatbotInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChatbotInstanceId'])) {
            $model->chatbotInstanceId = $map['ChatbotInstanceId'];
        }
        if (isset($map['ChatbotName'])) {
            $model->chatbotName = $map['ChatbotName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class AssociateChatbotInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $chatbotInstanceId;

    /**
     * @var string
     */
    public $chatbotName;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'chatbotInstanceId' => 'ChatbotInstanceId',
        'chatbotName'       => 'ChatbotName',
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
        if (null !== $this->chatbotInstanceId) {
            $res['ChatbotInstanceId'] = $this->chatbotInstanceId;
        }
        if (null !== $this->chatbotName) {
            $res['ChatbotName'] = $this->chatbotName;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ChatbotInstanceId'])) {
            $model->chatbotInstanceId = $map['ChatbotInstanceId'];
        }
        if (isset($map['ChatbotName'])) {
            $model->chatbotName = $map['ChatbotName'];
        }

        return $model;
    }
}

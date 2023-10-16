<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class AssociateChatbotInstanceRequest extends Model
{
    /**
     * @example chatbot-720edd02b66a
     *
     * @var string
     */
    public $chatbotInstanceId;

    /**
     * @var string
     */
    public $chatbotName;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nluServiceParamsJson;

    /**
     * @var string
     */
    public $unionSource;
    protected $_name = [
        'chatbotInstanceId'    => 'ChatbotInstanceId',
        'chatbotName'          => 'ChatbotName',
        'instanceId'           => 'InstanceId',
        'nluServiceParamsJson' => 'NluServiceParamsJson',
        'unionSource'          => 'UnionSource',
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
        if (null !== $this->nluServiceParamsJson) {
            $res['NluServiceParamsJson'] = $this->nluServiceParamsJson;
        }
        if (null !== $this->unionSource) {
            $res['UnionSource'] = $this->unionSource;
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
        if (isset($map['NluServiceParamsJson'])) {
            $model->nluServiceParamsJson = $map['NluServiceParamsJson'];
        }
        if (isset($map['UnionSource'])) {
            $model->unionSource = $map['UnionSource'];
        }

        return $model;
    }
}

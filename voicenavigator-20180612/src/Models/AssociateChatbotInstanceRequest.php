<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

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
    /**
     * @var string
     */
    public $nluServiceParamsJson;
    /**
     * @var string
     */
    public $nluServiceType;
    /**
     * @var string
     */
    public $unionSource;
    protected $_name = [
        'chatbotInstanceId'    => 'ChatbotInstanceId',
        'chatbotName'          => 'ChatbotName',
        'instanceId'           => 'InstanceId',
        'nluServiceParamsJson' => 'NluServiceParamsJson',
        'nluServiceType'       => 'NluServiceType',
        'unionSource'          => 'UnionSource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->nluServiceType) {
            $res['NluServiceType'] = $this->nluServiceType;
        }

        if (null !== $this->unionSource) {
            $res['UnionSource'] = $this->unionSource;
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

        if (isset($map['NluServiceType'])) {
            $model->nluServiceType = $map['NluServiceType'];
        }

        if (isset($map['UnionSource'])) {
            $model->unionSource = $map['UnionSource'];
        }

        return $model;
    }
}

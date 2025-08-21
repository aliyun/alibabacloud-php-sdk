<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class AssociateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $perspectiveShrink;

    /**
     * @var int
     */
    public $recommendNum;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $utterance;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'instanceId' => 'InstanceId',
        'perspectiveShrink' => 'Perspective',
        'recommendNum' => 'RecommendNum',
        'sessionId' => 'SessionId',
        'utterance' => 'Utterance',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->perspectiveShrink) {
            $res['Perspective'] = $this->perspectiveShrink;
        }

        if (null !== $this->recommendNum) {
            $res['RecommendNum'] = $this->recommendNum;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Perspective'])) {
            $model->perspectiveShrink = $map['Perspective'];
        }

        if (isset($map['RecommendNum'])) {
            $model->recommendNum = $map['RecommendNum'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }

        return $model;
    }
}

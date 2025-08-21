<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class AssociateRequest extends Model
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
     * @var string[]
     */
    public $perspective;

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
        'perspective' => 'Perspective',
        'recommendNum' => 'RecommendNum',
        'sessionId' => 'SessionId',
        'utterance' => 'Utterance',
    ];

    public function validate()
    {
        if (\is_array($this->perspective)) {
            Model::validateArray($this->perspective);
        }
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

        if (null !== $this->perspective) {
            if (\is_array($this->perspective)) {
                $res['Perspective'] = [];
                $n1 = 0;
                foreach ($this->perspective as $item1) {
                    $res['Perspective'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Perspective'])) {
                $model->perspective = [];
                $n1 = 0;
                foreach ($map['Perspective'] as $item1) {
                    $model->perspective[$n1] = $item1;
                    ++$n1;
                }
            }
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

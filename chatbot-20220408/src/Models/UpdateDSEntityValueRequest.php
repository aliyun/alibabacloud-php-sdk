<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class UpdateDSEntityValueRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var int
     */
    public $entityValueId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $synonyms;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'content' => 'Content',
        'entityId' => 'EntityId',
        'entityValueId' => 'EntityValueId',
        'instanceId' => 'InstanceId',
        'synonyms' => 'Synonyms',
    ];

    public function validate()
    {
        if (\is_array($this->synonyms)) {
            Model::validateArray($this->synonyms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityValueId) {
            $res['EntityValueId'] = $this->entityValueId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->synonyms) {
            if (\is_array($this->synonyms)) {
                $res['Synonyms'] = [];
                $n1 = 0;
                foreach ($this->synonyms as $item1) {
                    $res['Synonyms'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityValueId'])) {
            $model->entityValueId = $map['EntityValueId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Synonyms'])) {
            if (!empty($map['Synonyms'])) {
                $model->synonyms = [];
                $n1 = 0;
                foreach ($map['Synonyms'] as $item1) {
                    $model->synonyms[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

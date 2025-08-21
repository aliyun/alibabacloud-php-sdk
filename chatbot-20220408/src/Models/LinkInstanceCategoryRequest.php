<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class LinkInstanceCategoryRequest extends Model
{
    /**
     * @var string
     */
    public $abilityType;

    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $categoryIds;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'abilityType' => 'AbilityType',
        'agentKey' => 'AgentKey',
        'categoryIds' => 'CategoryIds',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abilityType) {
            $res['AbilityType'] = $this->abilityType;
        }

        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->categoryIds) {
            $res['CategoryIds'] = $this->categoryIds;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AbilityType'])) {
            $model->abilityType = $map['AbilityType'];
        }

        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['CategoryIds'])) {
            $model->categoryIds = $map['CategoryIds'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

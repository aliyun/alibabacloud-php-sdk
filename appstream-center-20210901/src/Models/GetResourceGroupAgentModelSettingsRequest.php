<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetResourceGroupAgentModelSettingsRequest extends Model
{
    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string[]
     */
    public $resourceGroupIds;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'bizType' => 'BizType',
        'resourceGroupIds' => 'ResourceGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroupIds)) {
            Model::validateArray($this->resourceGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->resourceGroupIds) {
            if (\is_array($this->resourceGroupIds)) {
                $res['ResourceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->resourceGroupIds as $item1) {
                    $res['ResourceGroupIds'][$n1] = $item1;
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
        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = [];
                $n1 = 0;
                foreach ($map['ResourceGroupIds'] as $item1) {
                    $model->resourceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

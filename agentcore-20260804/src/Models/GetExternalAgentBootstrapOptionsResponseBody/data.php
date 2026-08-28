<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentBootstrapOptionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentBootstrapOptionsResponseBody\data\networkOptions;

class data extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var networkOptions[]
     */
    public $networkOptions;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentId' => 'agentId',
        'networkOptions' => 'networkOptions',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->networkOptions)) {
            Model::validateArray($this->networkOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->networkOptions) {
            if (\is_array($this->networkOptions)) {
                $res['networkOptions'] = [];
                $n1 = 0;
                foreach ($this->networkOptions as $item1) {
                    $res['networkOptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['networkOptions'])) {
            if (!empty($map['networkOptions'])) {
                $model->networkOptions = [];
                $n1 = 0;
                foreach ($map['networkOptions'] as $item1) {
                    $model->networkOptions[$n1] = networkOptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\AgentGroupPageResponseBody\model;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $agentGroupId;

    /**
     * @var string
     */
    public $agentGroupName;

    /**
     * @var int[]
     */
    public $agentIds;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'agentGroupId' => 'AgentGroupId',
        'agentGroupName' => 'AgentGroupName',
        'agentIds' => 'AgentIds',
        'createTime' => 'CreateTime',
    ];

    public function validate()
    {
        if (\is_array($this->agentIds)) {
            Model::validateArray($this->agentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentGroupId) {
            $res['AgentGroupId'] = $this->agentGroupId;
        }

        if (null !== $this->agentGroupName) {
            $res['AgentGroupName'] = $this->agentGroupName;
        }

        if (null !== $this->agentIds) {
            if (\is_array($this->agentIds)) {
                $res['AgentIds'] = [];
                $n1 = 0;
                foreach ($this->agentIds as $item1) {
                    $res['AgentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['AgentGroupId'])) {
            $model->agentGroupId = $map['AgentGroupId'];
        }

        if (isset($map['AgentGroupName'])) {
            $model->agentGroupName = $map['AgentGroupName'];
        }

        if (isset($map['AgentIds'])) {
            if (!empty($map['AgentIds'])) {
                $model->agentIds = [];
                $n1 = 0;
                foreach ($map['AgentIds'] as $item1) {
                    $model->agentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}

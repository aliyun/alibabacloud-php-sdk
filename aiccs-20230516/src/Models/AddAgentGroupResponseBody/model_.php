<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\AddAgentGroupResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
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
     * @var string
     */
    public $createTime;
    protected $_name = [
        'agentGroupId' => 'AgentGroupId',
        'agentGroupName' => 'AgentGroupName',
        'createTime' => 'CreateTime',
    ];

    public function validate()
    {
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}

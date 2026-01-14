<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\QueryAgentInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\QueryAgentInfoResponseBody\model\agentGroupList;

class model_ extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var int
     */
    public $active;

    /**
     * @var int
     */
    public $agentExtension;

    /**
     * @var int[]
     */
    public $agentGroupIds;

    /**
     * @var agentGroupList[]
     */
    public $agentGroupList;

    /**
     * @var int
     */
    public $agentId;

    /**
     * @var int
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $agentTag;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $extensionPwd;

    /**
     * @var string
     */
    public $extensionServer;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $wsProtocol;

    /**
     * @var string
     */
    public $wsRegisterAddress;
    protected $_name = [
        'account' => 'Account',
        'active' => 'Active',
        'agentExtension' => 'AgentExtension',
        'agentGroupIds' => 'AgentGroupIds',
        'agentGroupList' => 'AgentGroupList',
        'agentId' => 'AgentId',
        'agentStatus' => 'AgentStatus',
        'agentTag' => 'AgentTag',
        'createTime' => 'CreateTime',
        'extensionPwd' => 'ExtensionPwd',
        'extensionServer' => 'ExtensionServer',
        'name' => 'Name',
        'wsProtocol' => 'WsProtocol',
        'wsRegisterAddress' => 'WsRegisterAddress',
    ];

    public function validate()
    {
        if (\is_array($this->agentGroupIds)) {
            Model::validateArray($this->agentGroupIds);
        }
        if (\is_array($this->agentGroupList)) {
            Model::validateArray($this->agentGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->agentExtension) {
            $res['AgentExtension'] = $this->agentExtension;
        }

        if (null !== $this->agentGroupIds) {
            if (\is_array($this->agentGroupIds)) {
                $res['AgentGroupIds'] = [];
                $n1 = 0;
                foreach ($this->agentGroupIds as $item1) {
                    $res['AgentGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->agentGroupList) {
            if (\is_array($this->agentGroupList)) {
                $res['AgentGroupList'] = [];
                $n1 = 0;
                foreach ($this->agentGroupList as $item1) {
                    $res['AgentGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        if (null !== $this->agentTag) {
            $res['AgentTag'] = $this->agentTag;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->extensionPwd) {
            $res['ExtensionPwd'] = $this->extensionPwd;
        }

        if (null !== $this->extensionServer) {
            $res['ExtensionServer'] = $this->extensionServer;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->wsProtocol) {
            $res['WsProtocol'] = $this->wsProtocol;
        }

        if (null !== $this->wsRegisterAddress) {
            $res['WsRegisterAddress'] = $this->wsRegisterAddress;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['AgentExtension'])) {
            $model->agentExtension = $map['AgentExtension'];
        }

        if (isset($map['AgentGroupIds'])) {
            if (!empty($map['AgentGroupIds'])) {
                $model->agentGroupIds = [];
                $n1 = 0;
                foreach ($map['AgentGroupIds'] as $item1) {
                    $model->agentGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AgentGroupList'])) {
            if (!empty($map['AgentGroupList'])) {
                $model->agentGroupList = [];
                $n1 = 0;
                foreach ($map['AgentGroupList'] as $item1) {
                    $model->agentGroupList[$n1] = agentGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        if (isset($map['AgentTag'])) {
            $model->agentTag = $map['AgentTag'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExtensionPwd'])) {
            $model->extensionPwd = $map['ExtensionPwd'];
        }

        if (isset($map['ExtensionServer'])) {
            $model->extensionServer = $map['ExtensionServer'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['WsProtocol'])) {
            $model->wsProtocol = $map['WsProtocol'];
        }

        if (isset($map['WsRegisterAddress'])) {
            $model->wsRegisterAddress = $map['WsRegisterAddress'];
        }

        return $model;
    }
}

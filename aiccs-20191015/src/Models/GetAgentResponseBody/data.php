<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentResponseBody\data\groupList;

class data extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var groupList[]
     */
    public $groupList;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'accountName' => 'AccountName',
        'agentId' => 'AgentId',
        'displayName' => 'DisplayName',
        'groupList' => 'GroupList',
        'status' => 'Status',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->groupList)) {
            Model::validateArray($this->groupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->groupList) {
            if (\is_array($this->groupList)) {
                $res['GroupList'] = [];
                $n1 = 0;
                foreach ($this->groupList as $item1) {
                    $res['GroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n1 = 0;
                foreach ($map['GroupList'] as $item1) {
                    $model->groupList[$n1++] = groupList::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

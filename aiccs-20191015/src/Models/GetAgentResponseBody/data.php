<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentResponseBody\data\groupList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 123@123.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 222222
     *
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
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 0
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'accountName' => 'AccountName',
        'agentId'     => 'AgentId',
        'displayName' => 'DisplayName',
        'groupList'   => 'GroupList',
        'status'      => 'Status',
        'tenantId'    => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['GroupList'] = [];
            if (null !== $this->groupList && \is_array($this->groupList)) {
                $n = 0;
                foreach ($this->groupList as $item) {
                    $res['GroupList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                = 0;
                foreach ($map['GroupList'] as $item) {
                    $model->groupList[$n++] = null !== $item ? groupList::fromMap($item) : $item;
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

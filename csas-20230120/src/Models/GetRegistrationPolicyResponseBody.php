<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\GetRegistrationPolicyResponseBody\limitDetail;
use AlibabaCloud\Tea\Model;

class GetRegistrationPolicyResponseBody extends Model
{
    /**
     * @example 2023-05-16 17:18:46
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var limitDetail[]
     */
    public $limitDetail;

    /**
     * @example UserGroupAll
     *
     * @var string
     */
    public $matchMode;

    /**
     * @example registration_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @example reg-policy-dcbfd33cb004****
     *
     * @var string
     */
    public $policyId;

    /**
     * @example 99
     *
     * @var int
     */
    public $priority;

    /**
     * @example 47363C2B-1AAA-5954-8847-0E50FCC54117
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string[]
     */
    public $whitelist;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'limitDetail'  => 'LimitDetail',
        'matchMode'    => 'MatchMode',
        'name'         => 'Name',
        'policyId'     => 'PolicyId',
        'priority'     => 'Priority',
        'requestId'    => 'RequestId',
        'status'       => 'Status',
        'userGroupIds' => 'UserGroupIds',
        'whitelist'    => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->limitDetail) {
            $res['LimitDetail'] = [];
            if (null !== $this->limitDetail && \is_array($this->limitDetail)) {
                $n = 0;
                foreach ($this->limitDetail as $item) {
                    $res['LimitDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRegistrationPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LimitDetail'])) {
            if (!empty($map['LimitDetail'])) {
                $model->limitDetail = [];
                $n                  = 0;
                foreach ($map['LimitDetail'] as $item) {
                    $model->limitDetail[$n++] = null !== $item ? limitDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = $map['UserGroupIds'];
            }
        }
        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = $map['Whitelist'];
            }
        }

        return $model;
    }
}

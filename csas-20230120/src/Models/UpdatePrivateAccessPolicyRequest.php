<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyRequest\customUserAttributes;
use AlibabaCloud\Tea\Model;

class UpdatePrivateAccessPolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $applicationIds;

    /**
     * @example Application
     *
     * @var string
     */
    public $applicationType;

    /**
     * @var customUserAttributes[]
     */
    public $customUserAttributes;

    /**
     * @var string
     */
    public $description;

    /**
     * @example Cover
     *
     * @var string
     */
    public $modifyType;

    /**
     * @example Allow
     *
     * @var string
     */
    public $policyAction;

    /**
     * @example pa-policy-63b2f1844b86****
     *
     * @var string
     */
    public $policyId;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description 内网访问标签ID集合。一条策略最多支持100个内网访问标签ID。
     *
     * @var string[]
     */
    public $tagIds;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @description 内网访问策略的用户组类型。取值：
     * - **Normal**：普通用户组。
     * - **Custom**：自定义用户组。
     * @example Normal
     *
     * @var string
     */
    public $userGroupMode;
    protected $_name = [
        'applicationIds'       => 'ApplicationIds',
        'applicationType'      => 'ApplicationType',
        'customUserAttributes' => 'CustomUserAttributes',
        'description'          => 'Description',
        'modifyType'           => 'ModifyType',
        'policyAction'         => 'PolicyAction',
        'policyId'             => 'PolicyId',
        'priority'             => 'Priority',
        'status'               => 'Status',
        'tagIds'               => 'TagIds',
        'userGroupIds'         => 'UserGroupIds',
        'userGroupMode'        => 'UserGroupMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIds) {
            $res['ApplicationIds'] = $this->applicationIds;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->customUserAttributes) {
            $res['CustomUserAttributes'] = [];
            if (null !== $this->customUserAttributes && \is_array($this->customUserAttributes)) {
                $n = 0;
                foreach ($this->customUserAttributes as $item) {
                    $res['CustomUserAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->policyAction) {
            $res['PolicyAction'] = $this->policyAction;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }
        if (null !== $this->userGroupMode) {
            $res['UserGroupMode'] = $this->userGroupMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrivateAccessPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = $map['ApplicationIds'];
            }
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['CustomUserAttributes'])) {
            if (!empty($map['CustomUserAttributes'])) {
                $model->customUserAttributes = [];
                $n                           = 0;
                foreach ($map['CustomUserAttributes'] as $item) {
                    $model->customUserAttributes[$n++] = null !== $item ? customUserAttributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['PolicyAction'])) {
            $model->policyAction = $map['PolicyAction'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = $map['TagIds'];
            }
        }
        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = $map['UserGroupIds'];
            }
        }
        if (isset($map['UserGroupMode'])) {
            $model->userGroupMode = $map['UserGroupMode'];
        }

        return $model;
    }
}

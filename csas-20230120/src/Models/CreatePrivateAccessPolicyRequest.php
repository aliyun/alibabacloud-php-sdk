<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyRequest\customUserAttributes;
use AlibabaCloud\Tea\Model;

class CreatePrivateAccessPolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $applicationIds;

    /**
     * @description This parameter is required.
     *
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
     * @var string
     */
    public $deviceAttributeId;

    /**
     * @description This parameter is required.
     *
     * @example private_access_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example Allow
     *
     * @var string
     */
    public $policyAction;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description This parameter is required.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description 内网访问标签ID集合。最多可输入100个内网访问标签ID。当**ApplicationType**为**Tag时**，必填。和**ApplicationIds**互斥。
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
     *
     * This parameter is required.
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
        'deviceAttributeId'    => 'DeviceAttributeId',
        'name'                 => 'Name',
        'policyAction'         => 'PolicyAction',
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
        if (null !== $this->deviceAttributeId) {
            $res['DeviceAttributeId'] = $this->deviceAttributeId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyAction) {
            $res['PolicyAction'] = $this->policyAction;
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
     * @return CreatePrivateAccessPolicyRequest
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
        if (isset($map['DeviceAttributeId'])) {
            $model->deviceAttributeId = $map['DeviceAttributeId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PolicyAction'])) {
            $model->policyAction = $map['PolicyAction'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrivateAccessPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationIdsShrink;

    /**
     * @example Application
     *
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $customUserAttributesShrink;

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
     * @var string
     */
    public $tagIdsShrink;

    /**
     * @var string
     */
    public $userGroupIdsShrink;

    /**
     * @var string
     */
    public $userGroupMode;
    protected $_name = [
        'applicationIdsShrink'       => 'ApplicationIds',
        'applicationType'            => 'ApplicationType',
        'customUserAttributesShrink' => 'CustomUserAttributes',
        'description'                => 'Description',
        'modifyType'                 => 'ModifyType',
        'policyAction'               => 'PolicyAction',
        'policyId'                   => 'PolicyId',
        'priority'                   => 'Priority',
        'status'                     => 'Status',
        'tagIdsShrink'               => 'TagIds',
        'userGroupIdsShrink'         => 'UserGroupIds',
        'userGroupMode'              => 'UserGroupMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIdsShrink) {
            $res['ApplicationIds'] = $this->applicationIdsShrink;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->customUserAttributesShrink) {
            $res['CustomUserAttributes'] = $this->customUserAttributesShrink;
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
        if (null !== $this->tagIdsShrink) {
            $res['TagIds'] = $this->tagIdsShrink;
        }
        if (null !== $this->userGroupIdsShrink) {
            $res['UserGroupIds'] = $this->userGroupIdsShrink;
        }
        if (null !== $this->userGroupMode) {
            $res['UserGroupMode'] = $this->userGroupMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrivateAccessPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            $model->applicationIdsShrink = $map['ApplicationIds'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['CustomUserAttributes'])) {
            $model->customUserAttributesShrink = $map['CustomUserAttributes'];
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
            $model->tagIdsShrink = $map['TagIds'];
        }
        if (isset($map['UserGroupIds'])) {
            $model->userGroupIdsShrink = $map['UserGroupIds'];
        }
        if (isset($map['UserGroupMode'])) {
            $model->userGroupMode = $map['UserGroupMode'];
        }

        return $model;
    }
}

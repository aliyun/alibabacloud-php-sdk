<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationResponseBody\applications;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationResponseBody\applications\policies\customUserAttributes;
use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @example Application
     *
     * @var string
     */
    public $applicationType;

    /**
     * @example 2022-09-27 18:10:25
     *
     * @var string
     */
    public $createTime;

    /**
     * @var customUserAttributes[]
     */
    public $customUserAttributes;

    /**
     * @var string
     */
    public $description;

    /**
     * @example private_access_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @example Allow
     *
     * @var string
     */
    public $policyAction;

    /**
     * @example pa-policy-867ef4007c8a****
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
     * @example Normal
     *
     * @var string
     */
    public $userGroupType;
    protected $_name = [
        'applicationType'      => 'ApplicationType',
        'createTime'           => 'CreateTime',
        'customUserAttributes' => 'CustomUserAttributes',
        'description'          => 'Description',
        'name'                 => 'Name',
        'policyAction'         => 'PolicyAction',
        'policyId'             => 'PolicyId',
        'priority'             => 'Priority',
        'status'               => 'Status',
        'userGroupType'        => 'UserGroupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->userGroupType) {
            $res['UserGroupType'] = $this->userGroupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['UserGroupType'])) {
            $model->userGroupType = $map['UserGroupType'];
        }

        return $model;
    }
}

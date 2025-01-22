<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationResponseBody\applications;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationResponseBody\applications\policies\customUserAttributes;

class policies extends Model
{
    /**
     * @var string
     */
    public $applicationType;
    /**
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
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $policyAction;
    /**
     * @var string
     */
    public $policyId;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $status;
    /**
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
        if (\is_array($this->customUserAttributes)) {
            Model::validateArray($this->customUserAttributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customUserAttributes) {
            if (\is_array($this->customUserAttributes)) {
                $res['CustomUserAttributes'] = [];
                $n1                          = 0;
                foreach ($this->customUserAttributes as $item1) {
                    $res['CustomUserAttributes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                          = 0;
                foreach ($map['CustomUserAttributes'] as $item1) {
                    $model->customUserAttributes[$n1++] = customUserAttributes::fromMap($item1);
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

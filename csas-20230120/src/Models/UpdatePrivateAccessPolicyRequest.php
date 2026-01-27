<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyRequest\customUserAttributes;

class UpdatePrivateAccessPolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $applicationIds;

    /**
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
    public $deviceAttributeAction;

    /**
     * @var string
     */
    public $deviceAttributeId;

    /**
     * @var string
     */
    public $modifyType;

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
     * @var string[]
     */
    public $tagIds;

    /**
     * @var string
     */
    public $triggerTemplateId;

    /**
     * @var string[]
     */
    public $trustedProcessGroupIds;

    /**
     * @var string
     */
    public $trustedProcessStatus;

    /**
     * @var string[]
     */
    public $trustedSoftwareIds;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string
     */
    public $userGroupMode;

    /**
     * @var int
     */
    public $validFrom;

    /**
     * @var string
     */
    public $validTimeStatus;

    /**
     * @var int
     */
    public $validUntil;
    protected $_name = [
        'applicationIds' => 'ApplicationIds',
        'applicationType' => 'ApplicationType',
        'customUserAttributes' => 'CustomUserAttributes',
        'description' => 'Description',
        'deviceAttributeAction' => 'DeviceAttributeAction',
        'deviceAttributeId' => 'DeviceAttributeId',
        'modifyType' => 'ModifyType',
        'name' => 'Name',
        'policyAction' => 'PolicyAction',
        'policyId' => 'PolicyId',
        'priority' => 'Priority',
        'status' => 'Status',
        'tagIds' => 'TagIds',
        'triggerTemplateId' => 'TriggerTemplateId',
        'trustedProcessGroupIds' => 'TrustedProcessGroupIds',
        'trustedProcessStatus' => 'TrustedProcessStatus',
        'trustedSoftwareIds' => 'TrustedSoftwareIds',
        'userGroupIds' => 'UserGroupIds',
        'userGroupMode' => 'UserGroupMode',
        'validFrom' => 'ValidFrom',
        'validTimeStatus' => 'ValidTimeStatus',
        'validUntil' => 'ValidUntil',
    ];

    public function validate()
    {
        if (\is_array($this->applicationIds)) {
            Model::validateArray($this->applicationIds);
        }
        if (\is_array($this->customUserAttributes)) {
            Model::validateArray($this->customUserAttributes);
        }
        if (\is_array($this->tagIds)) {
            Model::validateArray($this->tagIds);
        }
        if (\is_array($this->trustedProcessGroupIds)) {
            Model::validateArray($this->trustedProcessGroupIds);
        }
        if (\is_array($this->trustedSoftwareIds)) {
            Model::validateArray($this->trustedSoftwareIds);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationIds) {
            if (\is_array($this->applicationIds)) {
                $res['ApplicationIds'] = [];
                $n1 = 0;
                foreach ($this->applicationIds as $item1) {
                    $res['ApplicationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }

        if (null !== $this->customUserAttributes) {
            if (\is_array($this->customUserAttributes)) {
                $res['CustomUserAttributes'] = [];
                $n1 = 0;
                foreach ($this->customUserAttributes as $item1) {
                    $res['CustomUserAttributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->deviceAttributeAction) {
            $res['DeviceAttributeAction'] = $this->deviceAttributeAction;
        }

        if (null !== $this->deviceAttributeId) {
            $res['DeviceAttributeId'] = $this->deviceAttributeId;
        }

        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
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

        if (null !== $this->tagIds) {
            if (\is_array($this->tagIds)) {
                $res['TagIds'] = [];
                $n1 = 0;
                foreach ($this->tagIds as $item1) {
                    $res['TagIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->triggerTemplateId) {
            $res['TriggerTemplateId'] = $this->triggerTemplateId;
        }

        if (null !== $this->trustedProcessGroupIds) {
            if (\is_array($this->trustedProcessGroupIds)) {
                $res['TrustedProcessGroupIds'] = [];
                $n1 = 0;
                foreach ($this->trustedProcessGroupIds as $item1) {
                    $res['TrustedProcessGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trustedProcessStatus) {
            $res['TrustedProcessStatus'] = $this->trustedProcessStatus;
        }

        if (null !== $this->trustedSoftwareIds) {
            if (\is_array($this->trustedSoftwareIds)) {
                $res['TrustedSoftwareIds'] = [];
                $n1 = 0;
                foreach ($this->trustedSoftwareIds as $item1) {
                    $res['TrustedSoftwareIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userGroupMode) {
            $res['UserGroupMode'] = $this->userGroupMode;
        }

        if (null !== $this->validFrom) {
            $res['ValidFrom'] = $this->validFrom;
        }

        if (null !== $this->validTimeStatus) {
            $res['ValidTimeStatus'] = $this->validTimeStatus;
        }

        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
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
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = [];
                $n1 = 0;
                foreach ($map['ApplicationIds'] as $item1) {
                    $model->applicationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }

        if (isset($map['CustomUserAttributes'])) {
            if (!empty($map['CustomUserAttributes'])) {
                $model->customUserAttributes = [];
                $n1 = 0;
                foreach ($map['CustomUserAttributes'] as $item1) {
                    $model->customUserAttributes[$n1] = customUserAttributes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DeviceAttributeAction'])) {
            $model->deviceAttributeAction = $map['DeviceAttributeAction'];
        }

        if (isset($map['DeviceAttributeId'])) {
            $model->deviceAttributeId = $map['DeviceAttributeId'];
        }

        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
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

        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = [];
                $n1 = 0;
                foreach ($map['TagIds'] as $item1) {
                    $model->tagIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TriggerTemplateId'])) {
            $model->triggerTemplateId = $map['TriggerTemplateId'];
        }

        if (isset($map['TrustedProcessGroupIds'])) {
            if (!empty($map['TrustedProcessGroupIds'])) {
                $model->trustedProcessGroupIds = [];
                $n1 = 0;
                foreach ($map['TrustedProcessGroupIds'] as $item1) {
                    $model->trustedProcessGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TrustedProcessStatus'])) {
            $model->trustedProcessStatus = $map['TrustedProcessStatus'];
        }

        if (isset($map['TrustedSoftwareIds'])) {
            if (!empty($map['TrustedSoftwareIds'])) {
                $model->trustedSoftwareIds = [];
                $n1 = 0;
                foreach ($map['TrustedSoftwareIds'] as $item1) {
                    $model->trustedSoftwareIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserGroupMode'])) {
            $model->userGroupMode = $map['UserGroupMode'];
        }

        if (isset($map['ValidFrom'])) {
            $model->validFrom = $map['ValidFrom'];
        }

        if (isset($map['ValidTimeStatus'])) {
            $model->validTimeStatus = $map['ValidTimeStatus'];
        }

        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }

        return $model;
    }
}

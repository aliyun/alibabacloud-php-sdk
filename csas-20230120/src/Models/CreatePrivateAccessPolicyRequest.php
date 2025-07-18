<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyRequest\customUserAttributes;
use AlibabaCloud\Tea\Model;

class CreatePrivateAccessPolicyRequest extends Model
{
    /**
     * @description Set of application IDs for the private access policy. Up to 100 application IDs can be entered. Required when **ApplicationType** is **Application**. Mutually exclusive with **TagIds**.
     *
     * @var string[]
     */
    public $applicationIds;

    /**
     * @description Application type of the private access policy. Values:
     * - **Application**: Application.
     * - **Tag**: Tag.
     *
     * This parameter is required.
     *
     * @example Application
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description Set of custom user groups for the private access policy. Required when the user group type is **Custom**. Mutually exclusive with the user group ID set. Up to 10 custom user groups can be entered.
     *
     * @var customUserAttributes[]
     */
    public $customUserAttributes;

    /**
     * @description Description of the private access policy. The length is 1 to 128 characters, supporting Chinese and uppercase and lowercase English letters, and can include numbers, periods (.), underscores (_), hyphens (-), and spaces.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The execution policy for not meeting the security baseline. Values:
     *
     * - **Block**: Block.
     * - **Observe**: Observe.
     *
     * @example Block
     *
     * @var string
     */
    public $deviceAttributeAction;

    /**
     * @description The ID of the security baseline policy.
     *
     * @example dag-d3f64e8bdd4a****
     *
     * @var string
     */
    public $deviceAttributeId;

    /**
     * @description Name of the private access policy. The length is 1 to 128 characters, supporting Chinese and uppercase and lowercase English letters, and can include numbers, periods (.), underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example private_access_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @description Action of the private access policy. Values:
     * - **Block**: Block.
     * - **Allow**: Allow.
     *
     * This parameter is required.
     *
     * @example Allow
     *
     * @var string
     */
    public $policyAction;

    /**
     * @description The priority of the private access policy. The number 1 indicates the highest priority. Range: 1~1000, with the maximum value being the total number of private access policies.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The status of the private access policy. Values:
     * - **Enabled**: Enabled.
     * - **Disabled**: Disabled.
     *
     * This parameter is required.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description Set of tag IDs for the private access policy. Up to 100 tag IDs can be entered. Required when **ApplicationType** is **Tag**. Mutually exclusive with **ApplicationIds**.
     *
     * @var string[]
     */
    public $tagIds;

    /**
     * @description The trigger template ID.
     *
     * @example dag-d3f64e8bdd4a****
     *
     * @var string
     */
    public $triggerTemplateId;

    /**
     * @description The ID of the trusted process group.
     *
     * @var string[]
     */
    public $trustedProcessGroupIds;

    /**
     * @description The switch status of the trusted process. Values:
     * - **Enabled**: Enabled.
     * - **Disabled**: Disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $trustedProcessStatus;

    /**
     * @description The ID of the trusted software.
     *
     * @var string[]
     */
    public $trustedSoftwareIds;

    /**
     * @description Set of user group IDs for the private access policy. Required when the user group type is **Normal**. Mutually exclusive with the custom user group set. Up to 2000 user group IDs can be entered.
     *
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @description User group type of the private access policy. Values:
     * - **Normal**: Normal user group.
     * - **Custom**: Custom user group.
     *
     * This parameter is required.
     *
     * @example Normal
     *
     * @var string
     */
    public $userGroupMode;
    protected $_name = [
        'applicationIds' => 'ApplicationIds',
        'applicationType' => 'ApplicationType',
        'customUserAttributes' => 'CustomUserAttributes',
        'description' => 'Description',
        'deviceAttributeAction' => 'DeviceAttributeAction',
        'deviceAttributeId' => 'DeviceAttributeId',
        'name' => 'Name',
        'policyAction' => 'PolicyAction',
        'priority' => 'Priority',
        'status' => 'Status',
        'tagIds' => 'TagIds',
        'triggerTemplateId' => 'TriggerTemplateId',
        'trustedProcessGroupIds' => 'TrustedProcessGroupIds',
        'trustedProcessStatus' => 'TrustedProcessStatus',
        'trustedSoftwareIds' => 'TrustedSoftwareIds',
        'userGroupIds' => 'UserGroupIds',
        'userGroupMode' => 'UserGroupMode',
    ];

    public function validate() {}

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
        if (null !== $this->deviceAttributeAction) {
            $res['DeviceAttributeAction'] = $this->deviceAttributeAction;
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
        if (null !== $this->triggerTemplateId) {
            $res['TriggerTemplateId'] = $this->triggerTemplateId;
        }
        if (null !== $this->trustedProcessGroupIds) {
            $res['TrustedProcessGroupIds'] = $this->trustedProcessGroupIds;
        }
        if (null !== $this->trustedProcessStatus) {
            $res['TrustedProcessStatus'] = $this->trustedProcessStatus;
        }
        if (null !== $this->trustedSoftwareIds) {
            $res['TrustedSoftwareIds'] = $this->trustedSoftwareIds;
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
                $n = 0;
                foreach ($map['CustomUserAttributes'] as $item) {
                    $model->customUserAttributes[$n++] = null !== $item ? customUserAttributes::fromMap($item) : $item;
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
        if (isset($map['TriggerTemplateId'])) {
            $model->triggerTemplateId = $map['TriggerTemplateId'];
        }
        if (isset($map['TrustedProcessGroupIds'])) {
            if (!empty($map['TrustedProcessGroupIds'])) {
                $model->trustedProcessGroupIds = $map['TrustedProcessGroupIds'];
            }
        }
        if (isset($map['TrustedProcessStatus'])) {
            $model->trustedProcessStatus = $map['TrustedProcessStatus'];
        }
        if (isset($map['TrustedSoftwareIds'])) {
            if (!empty($map['TrustedSoftwareIds'])) {
                $model->trustedSoftwareIds = $map['TrustedSoftwareIds'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyRequest\customUserAttributes;
use AlibabaCloud\Tea\Model;

class UpdatePrivateAccessPolicyRequest extends Model
{
    /**
     * @description Set of application IDs for the private access policy. A single policy supports up to 100 private access application IDs.
     *
     * @var string[]
     */
    public $applicationIds;

    /**
     * @description Application type of the private access policy. Values:
     * - **Application**: Application.
     * - **Tag**: Tag.
     *
     * @example Application
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description Set of custom user attributes for the private access policy, required when the user group type is **Custom**. Mutually exclusive with the user group ID set. The total number of custom user groups is limited to 10.
     *
     * @var customUserAttributes[]
     */
    public $customUserAttributes;

    /**
     * @description Description of the private access policy. Length should be 1 to 128 characters, supporting Chinese and English letters (both uppercase and lowercase), and can include numbers, periods (.), underscores (_), hyphens (-), and spaces.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The execution strategy for not meeting the security baseline. Values:
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
     * @description The modification type of the private access policy. Values:
     * - **Cover** (default): Use the values of **ApplicationIds**, **UserGroupIds**, and **CustomUserAttributes** to overwrite the original application ID set, user group ID set, and custom user attribute set, respectively.
     * - **Append**: Add the values provided in **ApplicationIds**, **UserGroupIds**, and **CustomUserAttributes** to the original application ID set, user group ID set, and custom user attribute set, respectively.
     *
     * @example Cover
     *
     * @var string
     */
    public $modifyType;

    /**
     * @description Action of the private access policy. Values:
     * - **Block**: Block.
     * - **Allow**: Allow.
     *
     * @example Allow
     *
     * @var string
     */
    public $policyAction;

    /**
     * @description ID of the private access policy. Value sources:
     * - [ListPrivateAccessPolicies](~~ListPrivateAccessPolicies~~): Batch query for private access policies.
     * - [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~): Create a private access policy.
     *
     * This parameter is required.
     *
     * @example pa-policy-63b2f1844b86****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The priority of the private access policy. The number 1 indicates the highest priority. Range: 1~1000, with the maximum value being the total number of private access policies minus one.
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
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description Set of tag IDs for the private access policy. A single policy supports up to 100 private access tag IDs.
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
     * @description Trusted process group ID.
     *
     * @var string[]
     */
    public $trustedProcessGroupIds;

    /**
     * @description Trusted process switch status. Values:
     *
     * - **Enabled**: On.
     *
     * - **Disabled**: Off.
     *
     * @example Disabled
     *
     * @var string
     */
    public $trustedProcessStatus;

    /**
     * @description Trusted Software ID.
     *
     * @var string[]
     */
    public $trustedSoftwareIds;

    /**
     * @description Set of user group IDs for the private access policy, required when the user group type is **Normal**. Mutually exclusive with the custom user group set. A single policy supports up to 10,000 user groups, and a maximum of 2,000 user group IDs can be modified at once.
     *
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @description User group type of the private access policy. Values:
     * - **Normal**: Normal user group.
     * - **Custom**: Custom user group.
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
        'modifyType' => 'ModifyType',
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessPolicyResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessPolicyResponseBody\policy\customUserAttributes;
use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @description A collection of application IDs for the private access policy. This field has a value when the application type is Application.
     *
     * @var string[]
     */
    public $applicationIds;

    /**
     * @description The application type of the private access policy. Possible values:
     * - **Application**: Application.
     * - **Tag**: Tag.
     *
     * @example Application
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description Intranet access policy creation time.
     *
     * @example 2021-07-29 11:26:02
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Collection of custom user group attributes. Multiple custom user group attributes are combined with an OR relationship and take effect as a set.
     *
     * @var customUserAttributes[]
     */
    public $customUserAttributes;

    /**
     * @description Intranet access policy description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The action to take if the security baseline is not met. Possible values:
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
     * @description Intranet access policy name.
     *
     * @example private_access_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @description Intranet access policy action. Values:
     * - **Block**: Block.
     * - **Allow**: Allow.
     *
     * @example Allow
     *
     * @var string
     */
    public $policyAction;

    /**
     * @description Intranet access policy ID.
     *
     * @example pa-policy-63b2f1844b86****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description Intranet access policy priority. A value of 1 indicates the highest priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description Intranet access policy status. Values:
     * - **Enabled**: Enabled.
     * - **Disabled**: Disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description A collection of tag IDs for the private access policy. This field has a value when the application type is Tag.
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
     * @description A list of trusted process group IDs.
     *
     * @var string[]
     */
    public $trustedProcessGroupIds;

    /**
     * @description The status of the trusted process switch. Possible values:
     * - **Enabled**: Enabled.
     * - **Disabled**: Disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $trustedProcessStatus;

    /**
     * @description A list of trusted software IDs.
     *
     * @var string[]
     */
    public $trustedSoftwareIds;

    /**
     * @description Collection of user group IDs for the intranet access policy. This field is populated when the user group type is Normal.
     *
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @description User group type for the intranet access policy. Values:
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
        'createTime' => 'CreateTime',
        'customUserAttributes' => 'CustomUserAttributes',
        'description' => 'Description',
        'deviceAttributeAction' => 'DeviceAttributeAction',
        'deviceAttributeId' => 'DeviceAttributeId',
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
     * @return policy
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

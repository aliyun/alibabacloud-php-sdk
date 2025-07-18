<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessPolicesResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessPolicesResponseBody\polices\customUserAttributes;
use AlibabaCloud\Tea\Model;

class polices extends Model
{
    /**
     * @description The IDs of the applications that are specified in the private access policy. If the value of ApplicationType is **Application**, this parameter is returned.
     *
     * @var string[]
     */
    public $applicationIds;

    /**
     * @description The application type of the private access policy. Valid values:
     *
     *   **Application**
     *   **Tag**
     *
     * @example Application
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description The creation time of the private access policy.
     *
     * @example 2022-07-10 15:50:23
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The attributes of the custom user group. The attributes of the custom user group are evaluated by using a logical OR. If an attribute is matched, the policy takes effect.
     *
     * @var customUserAttributes[]
     */
    public $customUserAttributes;

    /**
     * @description The description of the private access policy.
     *
     * @example a private access policy
     *
     * @var string
     */
    public $description;

    /**
     * @description The action that is performed when the security baseline is not met. Valid values:
     *
     *   **Block**
     *   **Observe**
     *
     * @example Block
     *
     * @var string
     */
    public $deviceAttributeAction;

    /**
     * @description The ID of the security baseline.
     *
     * @example dag-d3f64e8bdd4a****
     *
     * @var string
     */
    public $deviceAttributeId;

    /**
     * @description The name of the private access policy.
     *
     * @example private_access_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The action in the private access policy. Valid values:
     *
     *   **Block**
     *   **Allow**
     *
     * @example Allow
     *
     * @var string
     */
    public $policyAction;

    /**
     * @description The ID of the private access policy.
     *
     * @example pa-policy-63b2f1844b86****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The priority of the private access policy. The value 1 indicates the highest priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The status of the private access policy. Valid values:
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The IDs of the tags that are specified in the private access policy. If the value of ApplicationType is **Tag**, this parameter is returned.
     *
     * @var string[]
     */
    public $tagIds;

    /**
     * @description The ID of the trigger template.
     *
     * @example dag-d3f64e8bdd4a****
     *
     * @var string
     */
    public $triggerTemplateId;

    /**
     * @description List of trusted process group IDs.
     *
     * @var string[]
     */
    public $trustedProcessGroupIds;

    /**
     * @description Trusted process switch status. Values:
     * - **Enabled**: On.
     * - **Disabled**: Off.
     *
     * @example Enabled
     *
     * @var string
     */
    public $trustedProcessStatus;

    /**
     * @description List of trusted software IDs.
     *
     * @var string[]
     */
    public $trustedSoftwareIds;

    /**
     * @description The IDs of user groups in the private access policy. If the value of UserGroupMode is **Normal**, this parameter is returned.
     *
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @description The type of the user group in the private access policy. Valid values:
     *
     *   **Normal**: regular user group.
     *   **Custom**: custom user group.
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
     * @return polices
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

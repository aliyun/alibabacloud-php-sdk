<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListUserPrivateAccessPoliciesResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserPrivateAccessPoliciesResponseBody\polices\customUserAttributes;
use AlibabaCloud\Tea\Model;

class polices extends Model
{
    /**
     * @description Set of custom user group attributes. Multiple custom user group attributes are in an OR relationship, effective as a union.
     *
     * @var customUserAttributes[]
     */
    public $customUserAttributes;

    /**
     * @description Associated security baseline.
     *
     * @example device_attribute_name
     *
     * @var string
     */
    public $deviceAttributeName;

    /**
     * @description Associated user group.
     *
     * @example user_group_name
     *
     * @var string
     */
    public $matchedUserGroup;

    /**
     * @description Intranet access policy name.
     *
     * @example private_access_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @description Action of the intranet access policy. Values:
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
     * @example pa-policy-1b0d0e8b4bcf****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description Priority of the intranet access policy. The number 1 indicates the highest priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description List of trusted process group IDs.
     *
     * @var string[]
     */
    public $trustedProcessGroupIds;

    /**
     * @description List of trusted software IDs.
     *
     * @var string[]
     */
    public $trustedSoftwareIds;

    /**
     * @description Type of the user group for the intranet access policy. Values:
     * - **Normal**: Normal user group.
     * - **Custom**: Custom user group.
     *
     * @example Custom
     *
     * @var string
     */
    public $userGroupMode;
    protected $_name = [
        'customUserAttributes' => 'CustomUserAttributes',
        'deviceAttributeName' => 'DeviceAttributeName',
        'matchedUserGroup' => 'MatchedUserGroup',
        'name' => 'Name',
        'policyAction' => 'PolicyAction',
        'policyId' => 'PolicyId',
        'priority' => 'Priority',
        'trustedProcessGroupIds' => 'TrustedProcessGroupIds',
        'trustedSoftwareIds' => 'TrustedSoftwareIds',
        'userGroupMode' => 'UserGroupMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customUserAttributes) {
            $res['CustomUserAttributes'] = [];
            if (null !== $this->customUserAttributes && \is_array($this->customUserAttributes)) {
                $n = 0;
                foreach ($this->customUserAttributes as $item) {
                    $res['CustomUserAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deviceAttributeName) {
            $res['DeviceAttributeName'] = $this->deviceAttributeName;
        }
        if (null !== $this->matchedUserGroup) {
            $res['MatchedUserGroup'] = $this->matchedUserGroup;
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
        if (null !== $this->trustedProcessGroupIds) {
            $res['TrustedProcessGroupIds'] = $this->trustedProcessGroupIds;
        }
        if (null !== $this->trustedSoftwareIds) {
            $res['TrustedSoftwareIds'] = $this->trustedSoftwareIds;
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
        if (isset($map['CustomUserAttributes'])) {
            if (!empty($map['CustomUserAttributes'])) {
                $model->customUserAttributes = [];
                $n = 0;
                foreach ($map['CustomUserAttributes'] as $item) {
                    $model->customUserAttributes[$n++] = null !== $item ? customUserAttributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeviceAttributeName'])) {
            $model->deviceAttributeName = $map['DeviceAttributeName'];
        }
        if (isset($map['MatchedUserGroup'])) {
            $model->matchedUserGroup = $map['MatchedUserGroup'];
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
        if (isset($map['TrustedProcessGroupIds'])) {
            if (!empty($map['TrustedProcessGroupIds'])) {
                $model->trustedProcessGroupIds = $map['TrustedProcessGroupIds'];
            }
        }
        if (isset($map['TrustedSoftwareIds'])) {
            if (!empty($map['TrustedSoftwareIds'])) {
                $model->trustedSoftwareIds = $map['TrustedSoftwareIds'];
            }
        }
        if (isset($map['UserGroupMode'])) {
            $model->userGroupMode = $map['UserGroupMode'];
        }

        return $model;
    }
}

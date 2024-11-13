<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListUserPrivateAccessPoliciesResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserPrivateAccessPoliciesResponseBody\polices\customUserAttributes;
use AlibabaCloud\Tea\Model;

class polices extends Model
{
    /**
     * @var customUserAttributes[]
     */
    public $customUserAttributes;

    /**
     * @example device_attribute_name
     *
     * @var string
     */
    public $deviceAttributeName;

    /**
     * @example user_group_name
     *
     * @var string
     */
    public $matchedUserGroup;

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
     * @example pa-policy-1b0d0e8b4bcf****
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
     * @example Custom
     *
     * @var string
     */
    public $userGroupMode;
    protected $_name = [
        'customUserAttributes' => 'CustomUserAttributes',
        'deviceAttributeName'  => 'DeviceAttributeName',
        'matchedUserGroup'     => 'MatchedUserGroup',
        'name'                 => 'Name',
        'policyAction'         => 'PolicyAction',
        'policyId'             => 'PolicyId',
        'priority'             => 'Priority',
        'userGroupMode'        => 'UserGroupMode',
    ];

    public function validate()
    {
    }

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
                $n                           = 0;
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
        if (isset($map['UserGroupMode'])) {
            $model->userGroupMode = $map['UserGroupMode'];
        }

        return $model;
    }
}

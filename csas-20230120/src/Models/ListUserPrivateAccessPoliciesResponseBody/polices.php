<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListUserPrivateAccessPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserPrivateAccessPoliciesResponseBody\polices\customUserAttributes;

class polices extends Model
{
    /**
     * @var customUserAttributes[]
     */
    public $customUserAttributes;
    /**
     * @var string
     */
    public $deviceAttributeName;
    /**
     * @var string
     */
    public $matchedUserGroup;
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
        if (\is_array($this->customUserAttributes)) {
            Model::validateArray($this->customUserAttributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customUserAttributes) {
            if (\is_array($this->customUserAttributes)) {
                $res['CustomUserAttributes'] = [];
                $n1                          = 0;
                foreach ($this->customUserAttributes as $item1) {
                    $res['CustomUserAttributes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomUserAttributes'])) {
            if (!empty($map['CustomUserAttributes'])) {
                $model->customUserAttributes = [];
                $n1                          = 0;
                foreach ($map['CustomUserAttributes'] as $item1) {
                    $model->customUserAttributes[$n1++] = customUserAttributes::fromMap($item1);
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

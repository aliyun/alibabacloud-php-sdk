<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class CreateThirdSsoAgentRequest extends Model
{
    /**
     * @example accountId1
     *
     * @var string
     */
    public $accountId;

    /**
     * @example accountName1
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 46c1341e-2648-447a-9b11-70b6a298d94d
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 46c1341e-2648-447a-9b11-70b6a298d94d
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example ccc_xp_pre***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $roleIds;

    /**
     * @var int[]
     */
    public $skillGroupIds;
    protected $_name = [
        'accountId'     => 'AccountId',
        'accountName'   => 'AccountName',
        'clientId'      => 'ClientId',
        'clientToken'   => 'ClientToken',
        'displayName'   => 'DisplayName',
        'instanceId'    => 'InstanceId',
        'roleIds'       => 'RoleIds',
        'skillGroupIds' => 'SkillGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateThirdSsoAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RoleIds'])) {
            if (!empty($map['RoleIds'])) {
                $model->roleIds = $map['RoleIds'];
            }
        }
        if (isset($map['SkillGroupIds'])) {
            if (!empty($map['SkillGroupIds'])) {
                $model->skillGroupIds = $map['SkillGroupIds'];
            }
        }

        return $model;
    }
}

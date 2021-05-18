<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class CreateThirdSsoAgentRequest extends Model
{
    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description param1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description param2
     *
     * @var string
     */
    public $clientId;

    /**
     * @description param3
     *
     * @var string
     */
    public $accountId;

    /**
     * @description param4
     *
     * @var string
     */
    public $accountName;

    /**
     * @description param5
     *
     * @var string
     */
    public $displayName;

    /**
     * @description param6
     *
     * @var int[]
     */
    public $skillGroupIds;

    /**
     * @description param7
     *
     * @var int[]
     */
    public $roleIds;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'instanceId'    => 'InstanceId',
        'clientId'      => 'ClientId',
        'accountId'     => 'AccountId',
        'accountName'   => 'AccountName',
        'displayName'   => 'DisplayName',
        'skillGroupIds' => 'SkillGroupIds',
        'roleIds'       => 'RoleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }
        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['SkillGroupIds'])) {
            if (!empty($map['SkillGroupIds'])) {
                $model->skillGroupIds = $map['SkillGroupIds'];
            }
        }
        if (isset($map['RoleIds'])) {
            if (!empty($map['RoleIds'])) {
                $model->roleIds = $map['RoleIds'];
            }
        }

        return $model;
    }
}

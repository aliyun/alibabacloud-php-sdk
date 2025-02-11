<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class CreateThirdSsoAgentRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $displayName;
    /**
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
        if (\is_array($this->roleIds)) {
            Model::validateArray($this->roleIds);
        }
        if (\is_array($this->skillGroupIds)) {
            Model::validateArray($this->skillGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->roleIds)) {
                $res['RoleIds'] = [];
                $n1             = 0;
                foreach ($this->roleIds as $item1) {
                    $res['RoleIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->skillGroupIds) {
            if (\is_array($this->skillGroupIds)) {
                $res['SkillGroupIds'] = [];
                $n1                   = 0;
                foreach ($this->skillGroupIds as $item1) {
                    $res['SkillGroupIds'][$n1++] = $item1;
                }
            }
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
                $model->roleIds = [];
                $n1             = 0;
                foreach ($map['RoleIds'] as $item1) {
                    $model->roleIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SkillGroupIds'])) {
            if (!empty($map['SkillGroupIds'])) {
                $model->skillGroupIds = [];
                $n1                   = 0;
                foreach ($map['SkillGroupIds'] as $item1) {
                    $model->skillGroupIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

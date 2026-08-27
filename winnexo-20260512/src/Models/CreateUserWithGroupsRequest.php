<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateUserWithGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $passwordEncrypted;

    /**
     * @var string[]
     */
    public $roleCodes;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string
     */
    public $wnAccountId;
    protected $_name = [
        'displayName' => 'displayName',
        'passwordEncrypted' => 'passwordEncrypted',
        'roleCodes' => 'roleCodes',
        'tenantId' => 'tenantId',
        'userGroupIds' => 'userGroupIds',
        'wnAccountId' => 'wnAccountId',
    ];

    public function validate()
    {
        if (\is_array($this->roleCodes)) {
            Model::validateArray($this->roleCodes);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->passwordEncrypted) {
            $res['passwordEncrypted'] = $this->passwordEncrypted;
        }

        if (null !== $this->roleCodes) {
            if (\is_array($this->roleCodes)) {
                $res['roleCodes'] = [];
                $n1 = 0;
                foreach ($this->roleCodes as $item1) {
                    $res['roleCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['userGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['userGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wnAccountId) {
            $res['wnAccountId'] = $this->wnAccountId;
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['passwordEncrypted'])) {
            $model->passwordEncrypted = $map['passwordEncrypted'];
        }

        if (isset($map['roleCodes'])) {
            if (!empty($map['roleCodes'])) {
                $model->roleCodes = [];
                $n1 = 0;
                foreach ($map['roleCodes'] as $item1) {
                    $model->roleCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userGroupIds'])) {
            if (!empty($map['userGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['userGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['wnAccountId'])) {
            $model->wnAccountId = $map['wnAccountId'];
        }

        return $model;
    }
}

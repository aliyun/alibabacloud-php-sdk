<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $isActive;

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
    public $wnUserId;
    protected $_name = [
        'displayName' => 'displayName',
        'isActive' => 'isActive',
        'roleCodes' => 'roleCodes',
        'tenantId' => 'tenantId',
        'userGroupIds' => 'userGroupIds',
        'wnUserId' => 'wnUserId',
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

        if (null !== $this->isActive) {
            $res['isActive'] = $this->isActive;
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

        if (null !== $this->wnUserId) {
            $res['wnUserId'] = $this->wnUserId;
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

        if (isset($map['isActive'])) {
            $model->isActive = $map['isActive'];
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

        if (isset($map['wnUserId'])) {
            $model->wnUserId = $map['wnUserId'];
        }

        return $model;
    }
}

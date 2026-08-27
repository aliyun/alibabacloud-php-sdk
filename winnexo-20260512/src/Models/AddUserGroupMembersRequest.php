<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class AddUserGroupMembersRequest extends Model
{
    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userGroupId;

    /**
     * @var int[]
     */
    public $userIds;
    protected $_name = [
        'tenantId' => 'tenantId',
        'userGroupId' => 'userGroupId',
        'userIds' => 'userIds',
    ];

    public function validate()
    {
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userGroupId) {
            $res['userGroupId'] = $this->userGroupId;
        }

        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['userIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['userIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userGroupId'])) {
            $model->userGroupId = $map['userGroupId'];
        }

        if (isset($map['userIds'])) {
            if (!empty($map['userIds'])) {
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['userIds'] as $item1) {
                    $model->userIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseMembersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseMembersResponseBody\members\keys;

class members extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var keys[]
     */
    public $keys;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'keys' => 'Keys',
        'memberId' => 'MemberId',
        'memberName' => 'MemberName',
        'role' => 'Role',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['Keys'] = [];
                $n1 = 0;
                foreach ($this->keys as $item1) {
                    $res['Keys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = [];
                $n1 = 0;
                foreach ($map['Keys'] as $item1) {
                    $model->keys[$n1] = keys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

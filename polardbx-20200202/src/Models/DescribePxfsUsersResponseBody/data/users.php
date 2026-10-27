<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePxfsUsersResponseBody\data;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $identityName;

    /**
     * @var int
     */
    public $posixGid;

    /**
     * @var int
     */
    public $posixUid;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'identityName' => 'IdentityName',
        'posixGid' => 'PosixGid',
        'posixUid' => 'PosixUid',
        'role' => 'Role',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->identityName) {
            $res['IdentityName'] = $this->identityName;
        }

        if (null !== $this->posixGid) {
            $res['PosixGid'] = $this->posixGid;
        }

        if (null !== $this->posixUid) {
            $res['PosixUid'] = $this->posixUid;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['IdentityName'])) {
            $model->identityName = $map['IdentityName'];
        }

        if (isset($map['PosixGid'])) {
            $model->posixGid = $map['PosixGid'];
        }

        if (isset($map['PosixUid'])) {
            $model->posixUid = $map['PosixUid'];
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

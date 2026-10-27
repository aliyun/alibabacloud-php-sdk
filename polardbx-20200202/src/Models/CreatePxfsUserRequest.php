<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class CreatePxfsUserRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

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
    public $regionId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'identityName' => 'IdentityName',
        'posixGid' => 'PosixGid',
        'posixUid' => 'PosixUid',
        'regionId' => 'RegionId',
        'role' => 'Role',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class endUserList extends Model
{
    /**
     * @var string
     */
    public $adDomain;

    /**
     * @var string
     */
    public $bindTime;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'adDomain'    => 'AdDomain',
        'bindTime'    => 'BindTime',
        'directoryId' => 'DirectoryId',
        'endUserId'   => 'EndUserId',
        'id'          => 'Id',
        'serialNo'    => 'SerialNo',
        'tenantId'    => 'TenantId',
        'userType'    => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adDomain) {
            $res['AdDomain'] = $this->adDomain;
        }
        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdDomain'])) {
            $model->adDomain = $map['AdDomain'];
        }
        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}

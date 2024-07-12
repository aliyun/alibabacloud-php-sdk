<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoResponseBody\data;

use AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoResponseBody\data\pegInstanceInfoList\userInfo;
use AlibabaCloud\Tea\Model;

class pegInstanceInfoList extends Model
{
    /**
     * @var string
     */
    public $bussinessCode;

    /**
     * @var mixed[]
     */
    public $coordinate;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $serviceCreatedTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'bussinessCode'      => 'BussinessCode',
        'coordinate'         => 'Coordinate',
        'idType'             => 'IdType',
        'instanceId'         => 'InstanceId',
        'serviceCreatedTime' => 'ServiceCreatedTime',
        'userId'             => 'UserId',
        'userInfo'           => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bussinessCode) {
            $res['BussinessCode'] = $this->bussinessCode;
        }
        if (null !== $this->coordinate) {
            $res['Coordinate'] = $this->coordinate;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->serviceCreatedTime) {
            $res['ServiceCreatedTime'] = $this->serviceCreatedTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pegInstanceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BussinessCode'])) {
            $model->bussinessCode = $map['BussinessCode'];
        }
        if (isset($map['Coordinate'])) {
            $model->coordinate = $map['Coordinate'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ServiceCreatedTime'])) {
            $model->serviceCreatedTime = $map['ServiceCreatedTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}

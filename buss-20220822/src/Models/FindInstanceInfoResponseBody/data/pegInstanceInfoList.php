<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoResponseBody\data\pegInstanceInfoList\userInfo;

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
        'bussinessCode' => 'BussinessCode',
        'coordinate' => 'Coordinate',
        'idType' => 'IdType',
        'instanceId' => 'InstanceId',
        'serviceCreatedTime' => 'ServiceCreatedTime',
        'userId' => 'UserId',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (\is_array($this->coordinate)) {
            Model::validateArray($this->coordinate);
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bussinessCode) {
            $res['BussinessCode'] = $this->bussinessCode;
        }

        if (null !== $this->coordinate) {
            if (\is_array($this->coordinate)) {
                $res['Coordinate'] = [];
                foreach ($this->coordinate as $key1 => $value1) {
                    $res['Coordinate'][$key1] = $value1;
                }
            }
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
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
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
        if (isset($map['BussinessCode'])) {
            $model->bussinessCode = $map['BussinessCode'];
        }

        if (isset($map['Coordinate'])) {
            if (!empty($map['Coordinate'])) {
                $model->coordinate = [];
                foreach ($map['Coordinate'] as $key1 => $value1) {
                    $model->coordinate[$key1] = $value1;
                }
            }
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

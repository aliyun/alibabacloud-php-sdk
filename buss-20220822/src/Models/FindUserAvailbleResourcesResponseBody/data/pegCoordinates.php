<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\FindUserAvailbleResourcesResponseBody\data;

use AlibabaCloud\Dara\Model;

class pegCoordinates extends Model
{
    /**
     * @var string
     */
    public $bussinessCode;

    /**
     * @var string
     */
    public $chargeType;

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
    public $region;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $resCreateTime;

    /**
     * @var string
     */
    public $resourceStatus;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceCreatedTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bussinessCode' => 'BussinessCode',
        'chargeType' => 'ChargeType',
        'coordinate' => 'Coordinate',
        'idType' => 'IdType',
        'instanceId' => 'InstanceId',
        'region' => 'Region',
        'releaseTime' => 'ReleaseTime',
        'resCreateTime' => 'ResCreateTime',
        'resourceStatus' => 'ResourceStatus',
        'resourceType' => 'ResourceType',
        'serviceCreatedTime' => 'ServiceCreatedTime',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->coordinate)) {
            Model::validateArray($this->coordinate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bussinessCode) {
            $res['BussinessCode'] = $this->bussinessCode;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
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

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }

        if (null !== $this->resCreateTime) {
            $res['ResCreateTime'] = $this->resCreateTime;
        }

        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->serviceCreatedTime) {
            $res['ServiceCreatedTime'] = $this->serviceCreatedTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
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

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        if (isset($map['ResCreateTime'])) {
            $model->resCreateTime = $map['ResCreateTime'];
        }

        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ServiceCreatedTime'])) {
            $model->serviceCreatedTime = $map['ServiceCreatedTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

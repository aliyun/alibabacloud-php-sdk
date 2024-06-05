<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models\FindUserGatewayByIdResponseBody;

use AlibabaCloud\Tea\Model;

class gateway extends Model
{
    /**
     * @example test_user
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example 3.0
     *
     * @var string
     */
    public $dgVersion;

    /**
     * @example Gateway exception, please launch local dg first
     *
     * @var string
     */
    public $exceptionMsg;

    /**
     * @description 网关的描述
     *
     * @var string
     */
    public $gatewayDesc;

    /**
     * @description 网关的编号
     *
     * @example dg-pv33g51gw69h****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description 网关的名称
     *
     * This parameter is required.
     * @var string
     */
    public $gatewayName;

    /**
     * @example 3
     *
     * @var int
     */
    public $numOfExceptionInstance;

    /**
     * @example 3
     *
     * @var int
     */
    public $numOfRunningInstance;

    /**
     * @description 地域的编号
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 网关的状态
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description 用户的编号
     *
     * @example 100****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'creatorId'              => 'CreatorId',
        'dgVersion'              => 'DgVersion',
        'exceptionMsg'           => 'ExceptionMsg',
        'gatewayDesc'            => 'GatewayDesc',
        'gatewayId'              => 'GatewayId',
        'gatewayName'            => 'GatewayName',
        'numOfExceptionInstance' => 'NumOfExceptionInstance',
        'numOfRunningInstance'   => 'NumOfRunningInstance',
        'regionId'               => 'RegionId',
        'status'                 => 'Status',
        'userId'                 => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->dgVersion) {
            $res['DgVersion'] = $this->dgVersion;
        }
        if (null !== $this->exceptionMsg) {
            $res['ExceptionMsg'] = $this->exceptionMsg;
        }
        if (null !== $this->gatewayDesc) {
            $res['GatewayDesc'] = $this->gatewayDesc;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }
        if (null !== $this->numOfExceptionInstance) {
            $res['NumOfExceptionInstance'] = $this->numOfExceptionInstance;
        }
        if (null !== $this->numOfRunningInstance) {
            $res['NumOfRunningInstance'] = $this->numOfRunningInstance;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['DgVersion'])) {
            $model->dgVersion = $map['DgVersion'];
        }
        if (isset($map['ExceptionMsg'])) {
            $model->exceptionMsg = $map['ExceptionMsg'];
        }
        if (isset($map['GatewayDesc'])) {
            $model->gatewayDesc = $map['GatewayDesc'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }
        if (isset($map['NumOfExceptionInstance'])) {
            $model->numOfExceptionInstance = $map['NumOfExceptionInstance'];
        }
        if (isset($map['NumOfRunningInstance'])) {
            $model->numOfRunningInstance = $map['NumOfRunningInstance'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

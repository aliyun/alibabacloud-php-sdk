<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListAivppResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @example 2034-03-09T17:47:11Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example i-bp154xh3gt3adb4xu1ue
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example api
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 1
     *
     * @var string
     */
    public $leftQuantity;

    /**
     * @example 231287932080007
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 1
     *
     * @var string
     */
    public $quantity;

    /**
     * @example LoadForecasting
     *
     * @var string
     */
    public $specification;

    /**
     * @example 2024-09-08T01:16Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'detail' => 'Detail',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'leftQuantity' => 'LeftQuantity',
        'orderId' => 'OrderId',
        'quantity' => 'Quantity',
        'specification' => 'Specification',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->leftQuantity) {
            $res['LeftQuantity'] = $this->leftQuantity;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LeftQuantity'])) {
            $model->leftQuantity = $map['LeftQuantity'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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

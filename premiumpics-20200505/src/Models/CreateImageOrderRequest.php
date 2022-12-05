<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class CreateImageOrderRequest extends Model
{
    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $buyerType;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $contactNumber;

    /**
     * @var string
     */
    public $goodsId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $specificationName;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoRenew'         => 'AutoRenew',
        'buyerType'         => 'BuyerType',
        'channel'           => 'Channel',
        'contactName'       => 'ContactName',
        'contactNumber'     => 'ContactNumber',
        'goodsId'           => 'GoodsId',
        'instanceId'        => 'InstanceId',
        'orderType'         => 'OrderType',
        'specificationName' => 'SpecificationName',
        'token'             => 'Token',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->buyerType) {
            $res['BuyerType'] = $this->buyerType;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactNumber) {
            $res['ContactNumber'] = $this->contactNumber;
        }
        if (null !== $this->goodsId) {
            $res['GoodsId'] = $this->goodsId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->specificationName) {
            $res['SpecificationName'] = $this->specificationName;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BuyerType'])) {
            $model->buyerType = $map['BuyerType'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactNumber'])) {
            $model->contactNumber = $map['ContactNumber'];
        }
        if (isset($map['GoodsId'])) {
            $model->goodsId = $map['GoodsId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['SpecificationName'])) {
            $model->specificationName = $map['SpecificationName'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

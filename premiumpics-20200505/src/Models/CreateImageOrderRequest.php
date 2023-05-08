<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class CreateImageOrderRequest extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @example 1
     *
     * @var string
     */
    public $buyerType;

    /**
     * @example 6
     *
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
     * @example 0da9332a7e46bf3a3648322cc4cefe55
     *
     * @var string
     */
    public $goodsId;

    /**
     * @example waf-cn-2r427peet48
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example SINGLE
     *
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $specificationName;

    /**
     * @example 74aed3df801b1abeea70604eae4c777a
     *
     * @var string
     */
    public $token;

    /**
     * @description type
     *
     * @example A
     *
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

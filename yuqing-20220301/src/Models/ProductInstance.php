<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ProductInstance extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example EUWYEEQ
     *
     * @var string
     */
    public $appCode;

    /**
     * @example xxx
     *
     * @var string
     */
    public $buyerName;

    /**
     * @description This parameter is required.
     *
     * @example ID2343231321
     *
     * @var string
     */
    public $buyerUid;

    /**
     * @description This parameter is required.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $channel;

    /**
     * @example {}
     *
     * @var string
     */
    public $config;

    /**
     * @example 1640292843231
     *
     * @var int
     */
    public $end;

    /**
     * @description This parameter is required.
     *
     * @example ID3928389103844
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example D23938474923u42
     *
     * @var string
     */
    public $orderNo;

    /**
     * @description This parameter is required.
     *
     * @example C394884
     *
     * @var string
     */
    public $productCode;

    /**
     * @description This parameter is required.
     *
     * @example C847573
     *
     * @var string
     */
    public $productSpecCode;

    /**
     * @example 1640292843231
     *
     * @var int
     */
    public $start;

    /**
     * @example XXX
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description This parameter is required.
     *
     * @example UID284747383
     *
     * @var string
     */
    public $tenantUid;
    protected $_name = [
        'appCode'         => 'appCode',
        'buyerName'       => 'buyerName',
        'buyerUid'        => 'buyerUid',
        'channel'         => 'channel',
        'config'          => 'config',
        'end'             => 'end',
        'instanceId'      => 'instanceId',
        'orderNo'         => 'orderNo',
        'productCode'     => 'productCode',
        'productSpecCode' => 'productSpecCode',
        'start'           => 'start',
        'tenantName'      => 'tenantName',
        'tenantUid'       => 'tenantUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['appCode'] = $this->appCode;
        }
        if (null !== $this->buyerName) {
            $res['buyerName'] = $this->buyerName;
        }
        if (null !== $this->buyerUid) {
            $res['buyerUid'] = $this->buyerUid;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->orderNo) {
            $res['orderNo'] = $this->orderNo;
        }
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }
        if (null !== $this->productSpecCode) {
            $res['productSpecCode'] = $this->productSpecCode;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->tenantName) {
            $res['tenantName'] = $this->tenantName;
        }
        if (null !== $this->tenantUid) {
            $res['tenantUid'] = $this->tenantUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProductInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appCode'])) {
            $model->appCode = $map['appCode'];
        }
        if (isset($map['buyerName'])) {
            $model->buyerName = $map['buyerName'];
        }
        if (isset($map['buyerUid'])) {
            $model->buyerUid = $map['buyerUid'];
        }
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['orderNo'])) {
            $model->orderNo = $map['orderNo'];
        }
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }
        if (isset($map['productSpecCode'])) {
            $model->productSpecCode = $map['productSpecCode'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }
        if (isset($map['tenantName'])) {
            $model->tenantName = $map['tenantName'];
        }
        if (isset($map['tenantUid'])) {
            $model->tenantUid = $map['tenantUid'];
        }

        return $model;
    }
}

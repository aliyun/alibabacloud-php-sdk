<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListOrdersResponseBody;

use AlibabaCloud\Tea\Model;

class orders extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $cardCount;

    /**
     * @var string
     */
    public $cardNetType;

    /**
     * @var string
     */
    public $cardType;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $contactPhone;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $logisticsId;

    /**
     * @var string
     */
    public $logisticsStatus;

    /**
     * @var string
     */
    public $logisticsType;

    /**
     * @var string
     */
    public $logisticsUpdateTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @var string
     */
    public $postAddress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'action'              => 'Action',
        'cardCount'           => 'CardCount',
        'cardNetType'         => 'CardNetType',
        'cardType'            => 'CardType',
        'contactName'         => 'ContactName',
        'contactPhone'        => 'ContactPhone',
        'createTime'          => 'CreateTime',
        'description'         => 'Description',
        'logisticsId'         => 'LogisticsId',
        'logisticsStatus'     => 'LogisticsStatus',
        'logisticsType'       => 'LogisticsType',
        'logisticsUpdateTime' => 'LogisticsUpdateTime',
        'orderId'             => 'OrderId',
        'payTime'             => 'PayTime',
        'postAddress'         => 'PostAddress',
        'regionId'            => 'RegionId',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->cardCount) {
            $res['CardCount'] = $this->cardCount;
        }
        if (null !== $this->cardNetType) {
            $res['CardNetType'] = $this->cardNetType;
        }
        if (null !== $this->cardType) {
            $res['CardType'] = $this->cardType;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactPhone) {
            $res['ContactPhone'] = $this->contactPhone;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->logisticsId) {
            $res['LogisticsId'] = $this->logisticsId;
        }
        if (null !== $this->logisticsStatus) {
            $res['LogisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->logisticsType) {
            $res['LogisticsType'] = $this->logisticsType;
        }
        if (null !== $this->logisticsUpdateTime) {
            $res['LogisticsUpdateTime'] = $this->logisticsUpdateTime;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->payTime) {
            $res['PayTime'] = $this->payTime;
        }
        if (null !== $this->postAddress) {
            $res['PostAddress'] = $this->postAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['CardCount'])) {
            $model->cardCount = $map['CardCount'];
        }
        if (isset($map['CardNetType'])) {
            $model->cardNetType = $map['CardNetType'];
        }
        if (isset($map['CardType'])) {
            $model->cardType = $map['CardType'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactPhone'])) {
            $model->contactPhone = $map['ContactPhone'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LogisticsId'])) {
            $model->logisticsId = $map['LogisticsId'];
        }
        if (isset($map['LogisticsStatus'])) {
            $model->logisticsStatus = $map['LogisticsStatus'];
        }
        if (isset($map['LogisticsType'])) {
            $model->logisticsType = $map['LogisticsType'];
        }
        if (isset($map['LogisticsUpdateTime'])) {
            $model->logisticsUpdateTime = $map['LogisticsUpdateTime'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PayTime'])) {
            $model->payTime = $map['PayTime'];
        }
        if (isset($map['PostAddress'])) {
            $model->postAddress = $map['PostAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowUsageResponseBody\data;

use AlibabaCloud\Tea\Model;

class customerList extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $customerEndTime;

    /**
     * @var string
     */
    public $customerFlowOrderId;

    /**
     * @var string
     */
    public $customerFlowStatus;

    /**
     * @var string
     */
    public $customerOpenTime;

    /**
     * @var string
     */
    public $customerStartTime;

    /**
     * @var string
     */
    public $flowProductId;

    /**
     * @var string
     */
    public $flowProductName;

    /**
     * @var bool
     */
    public $isLasting;

    /**
     * @var string
     */
    public $mobileNumber;

    /**
     * @var int
     */
    public $unitNum;

    /**
     * @var int
     */
    public $unitPrice;
    protected $_name = [
        'channelId'           => 'ChannelId',
        'customerEndTime'     => 'CustomerEndTime',
        'customerFlowOrderId' => 'CustomerFlowOrderId',
        'customerFlowStatus'  => 'CustomerFlowStatus',
        'customerOpenTime'    => 'CustomerOpenTime',
        'customerStartTime'   => 'CustomerStartTime',
        'flowProductId'       => 'FlowProductId',
        'flowProductName'     => 'FlowProductName',
        'isLasting'           => 'IsLasting',
        'mobileNumber'        => 'MobileNumber',
        'unitNum'             => 'UnitNum',
        'unitPrice'           => 'UnitPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->customerEndTime) {
            $res['CustomerEndTime'] = $this->customerEndTime;
        }
        if (null !== $this->customerFlowOrderId) {
            $res['CustomerFlowOrderId'] = $this->customerFlowOrderId;
        }
        if (null !== $this->customerFlowStatus) {
            $res['CustomerFlowStatus'] = $this->customerFlowStatus;
        }
        if (null !== $this->customerOpenTime) {
            $res['CustomerOpenTime'] = $this->customerOpenTime;
        }
        if (null !== $this->customerStartTime) {
            $res['CustomerStartTime'] = $this->customerStartTime;
        }
        if (null !== $this->flowProductId) {
            $res['FlowProductId'] = $this->flowProductId;
        }
        if (null !== $this->flowProductName) {
            $res['FlowProductName'] = $this->flowProductName;
        }
        if (null !== $this->isLasting) {
            $res['IsLasting'] = $this->isLasting;
        }
        if (null !== $this->mobileNumber) {
            $res['MobileNumber'] = $this->mobileNumber;
        }
        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }
        if (null !== $this->unitPrice) {
            $res['UnitPrice'] = $this->unitPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CustomerEndTime'])) {
            $model->customerEndTime = $map['CustomerEndTime'];
        }
        if (isset($map['CustomerFlowOrderId'])) {
            $model->customerFlowOrderId = $map['CustomerFlowOrderId'];
        }
        if (isset($map['CustomerFlowStatus'])) {
            $model->customerFlowStatus = $map['CustomerFlowStatus'];
        }
        if (isset($map['CustomerOpenTime'])) {
            $model->customerOpenTime = $map['CustomerOpenTime'];
        }
        if (isset($map['CustomerStartTime'])) {
            $model->customerStartTime = $map['CustomerStartTime'];
        }
        if (isset($map['FlowProductId'])) {
            $model->flowProductId = $map['FlowProductId'];
        }
        if (isset($map['FlowProductName'])) {
            $model->flowProductName = $map['FlowProductName'];
        }
        if (isset($map['IsLasting'])) {
            $model->isLasting = $map['IsLasting'];
        }
        if (isset($map['MobileNumber'])) {
            $model->mobileNumber = $map['MobileNumber'];
        }
        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }
        if (isset($map['UnitPrice'])) {
            $model->unitPrice = $map['UnitPrice'];
        }

        return $model;
    }
}

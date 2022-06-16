<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowUsageResponseBody\data;

use AlibabaCloud\Tea\Model;

class customerList extends Model
{
    /**
     * @description 购买渠道
     *
     * @var string
     */
    public $channelId;

    /**
     * @description C端产品失效时间
     *
     * @var string
     */
    public $customerEndTime;

    /**
     * @var string
     */
    public $customerFlowOrderId;

    /**
     * @description C端免流状态，取值包括create/working/expiration
     *
     * @var string
     */
    public $customerFlowStatus;

    /**
     * @description C端产品开通时间
     *
     * @var string
     */
    public $customerOpenTime;

    /**
     * @description C端产品生效时间
     *
     * @var string
     */
    public $customerStartTime;

    /**
     * @description 免流产品ID
     *
     * @var string
     */
    public $flowProductId;

    /**
     * @description 免流产品名
     *
     * @var string
     */
    public $flowProductName;

    /**
     * @description 是否包月，true或false
     *
     * @var bool
     */
    public $isLasting;

    /**
     * @description C端手机号
     *
     * @var string
     */
    public $mobileNumber;

    /**
     * @description 该流量包的计量单元数
     *
     * @var int
     */
    public $unitNum;

    /**
     * @description 流量包价格
     *
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

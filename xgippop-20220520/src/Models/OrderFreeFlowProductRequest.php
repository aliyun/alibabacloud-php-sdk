<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class OrderFreeFlowProductRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @description 渠道ID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 客户侧生成的QoS请求ID，需要保证请求幂等性，确保不同请求间该参数值唯一
     *
     * @var string
     */
    public $customerFlowRequestId;

    /**
     * @description 免流产品ID
     *
     * @var string
     */
    public $flowProductId;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 是否包月，true为包月，false为不包月
     *
     * @var string
     */
    public $lasting;

    /**
     * @description C端手机号
     *
     * @var string
     */
    public $mobileNumber;

    /**
     * @description 客户提供的回调通知接口url
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description 取值包括cm（中国移动）/ct（中国电信）/cu（中国联通）
     *
     * @var string
     */
    public $operator;

    /**
     * @description 支付订单ID
     *
     * @var string
     */
    public $purchaseOrderId;
    protected $_name = [
        'aliUid'                => 'AliUid',
        'channelId'             => 'ChannelId',
        'customerFlowRequestId' => 'CustomerFlowRequestId',
        'flowProductId'         => 'FlowProductId',
        'instanceId'            => 'InstanceId',
        'lasting'               => 'Lasting',
        'mobileNumber'          => 'MobileNumber',
        'notifyUrl'             => 'NotifyUrl',
        'operator'              => 'Operator',
        'purchaseOrderId'       => 'PurchaseOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->customerFlowRequestId) {
            $res['CustomerFlowRequestId'] = $this->customerFlowRequestId;
        }
        if (null !== $this->flowProductId) {
            $res['FlowProductId'] = $this->flowProductId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lasting) {
            $res['Lasting'] = $this->lasting;
        }
        if (null !== $this->mobileNumber) {
            $res['MobileNumber'] = $this->mobileNumber;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->purchaseOrderId) {
            $res['PurchaseOrderId'] = $this->purchaseOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderFreeFlowProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CustomerFlowRequestId'])) {
            $model->customerFlowRequestId = $map['CustomerFlowRequestId'];
        }
        if (isset($map['FlowProductId'])) {
            $model->flowProductId = $map['FlowProductId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lasting'])) {
            $model->lasting = $map['Lasting'];
        }
        if (isset($map['MobileNumber'])) {
            $model->mobileNumber = $map['MobileNumber'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['PurchaseOrderId'])) {
            $model->purchaseOrderId = $map['PurchaseOrderId'];
        }

        return $model;
    }
}

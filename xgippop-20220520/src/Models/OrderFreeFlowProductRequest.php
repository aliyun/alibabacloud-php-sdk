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
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $customerFlowRequestId;

    /**
     * @var string
     */
    public $flowProductId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lasting;

    /**
     * @var string
     */
    public $mobileNumber;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $operator;

    /**
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

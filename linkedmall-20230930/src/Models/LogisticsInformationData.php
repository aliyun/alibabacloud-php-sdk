<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class LogisticsInformationData extends Model
{
    /**
     * @var string
     */
    public $logisticsStatus;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderLineId;

    /**
     * @var string
     */
    public $outerPurchaseOrderId;

    /**
     * @var string
     */
    public $purchaserId;

    /**
     * @var string
     */
    public $trackingCompanyCode;

    /**
     * @var string
     */
    public $trackingCompanyName;

    /**
     * @var string
     */
    public $trackingNumber;
    protected $_name = [
        'logisticsStatus'      => 'logisticsStatus',
        'modifiedTime'         => 'modifiedTime',
        'orderId'              => 'orderId',
        'orderLineId'          => 'orderLineId',
        'outerPurchaseOrderId' => 'outerPurchaseOrderId',
        'purchaserId'          => 'purchaserId',
        'trackingCompanyCode'  => 'trackingCompanyCode',
        'trackingCompanyName'  => 'trackingCompanyName',
        'trackingNumber'       => 'trackingNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logisticsStatus) {
            $res['logisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }
        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
        }
        if (null !== $this->outerPurchaseOrderId) {
            $res['outerPurchaseOrderId'] = $this->outerPurchaseOrderId;
        }
        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
        }
        if (null !== $this->trackingCompanyCode) {
            $res['trackingCompanyCode'] = $this->trackingCompanyCode;
        }
        if (null !== $this->trackingCompanyName) {
            $res['trackingCompanyName'] = $this->trackingCompanyName;
        }
        if (null !== $this->trackingNumber) {
            $res['trackingNumber'] = $this->trackingNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogisticsInformationData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logisticsStatus'])) {
            $model->logisticsStatus = $map['logisticsStatus'];
        }
        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }
        if (isset($map['orderLineId'])) {
            $model->orderLineId = $map['orderLineId'];
        }
        if (isset($map['outerPurchaseOrderId'])) {
            $model->outerPurchaseOrderId = $map['outerPurchaseOrderId'];
        }
        if (isset($map['purchaserId'])) {
            $model->purchaserId = $map['purchaserId'];
        }
        if (isset($map['trackingCompanyCode'])) {
            $model->trackingCompanyCode = $map['trackingCompanyCode'];
        }
        if (isset($map['trackingCompanyName'])) {
            $model->trackingCompanyName = $map['trackingCompanyName'];
        }
        if (isset($map['trackingNumber'])) {
            $model->trackingNumber = $map['trackingNumber'];
        }

        return $model;
    }
}

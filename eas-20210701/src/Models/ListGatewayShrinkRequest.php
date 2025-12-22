<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class ListGatewayShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayName;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var bool
     */
    public $internetEnabled;

    /**
     * @var string
     */
    public $labelShrink;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'gatewayId' => 'GatewayId',
        'gatewayName' => 'GatewayName',
        'gatewayType' => 'GatewayType',
        'internetEnabled' => 'InternetEnabled',
        'labelShrink' => 'Label',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceName' => 'ResourceName',
        'sort' => 'Sort',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }

        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }

        if (null !== $this->internetEnabled) {
            $res['InternetEnabled'] = $this->internetEnabled;
        }

        if (null !== $this->labelShrink) {
            $res['Label'] = $this->labelShrink;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }

        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }

        if (isset($map['InternetEnabled'])) {
            $model->internetEnabled = $map['InternetEnabled'];
        }

        if (isset($map['Label'])) {
            $model->labelShrink = $map['Label'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

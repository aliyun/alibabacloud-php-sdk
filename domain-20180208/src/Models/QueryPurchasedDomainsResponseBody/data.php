<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryPurchasedDomainsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deliveryTime;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $operationStatus;

    /**
     * @var string
     */
    public $operationTime;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var float
     */
    public $tradeMoney;
    protected $_name = [
        'deliveryTime'    => 'DeliveryTime',
        'domainName'      => 'DomainName',
        'operationStatus' => 'OperationStatus',
        'operationTime'   => 'OperationTime',
        'productType'     => 'ProductType',
        'tradeMoney'      => 'TradeMoney',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryTime) {
            $res['DeliveryTime'] = $this->deliveryTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }
        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->tradeMoney) {
            $res['TradeMoney'] = $this->tradeMoney;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryTime'])) {
            $model->deliveryTime = $map['DeliveryTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }
        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['TradeMoney'])) {
            $model->tradeMoney = $map['TradeMoney'];
        }

        return $model;
    }
}

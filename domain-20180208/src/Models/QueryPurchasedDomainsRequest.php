<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class QueryPurchasedDomainsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endOperationTime;

    /**
     * @var bool
     */
    public $opTimeOrder;

    /**
     * @var int
     */
    public $operationStatus;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $productType;

    /**
     * @var string
     */
    public $startOperationTime;

    /**
     * @var bool
     */
    public $updateTimeOrder;
    protected $_name = [
        'currentPage'        => 'CurrentPage',
        'domainName'         => 'DomainName',
        'endOperationTime'   => 'EndOperationTime',
        'opTimeOrder'        => 'OpTimeOrder',
        'operationStatus'    => 'OperationStatus',
        'pageSize'           => 'PageSize',
        'productType'        => 'ProductType',
        'startOperationTime' => 'StartOperationTime',
        'updateTimeOrder'    => 'UpdateTimeOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endOperationTime) {
            $res['EndOperationTime'] = $this->endOperationTime;
        }
        if (null !== $this->opTimeOrder) {
            $res['OpTimeOrder'] = $this->opTimeOrder;
        }
        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->startOperationTime) {
            $res['StartOperationTime'] = $this->startOperationTime;
        }
        if (null !== $this->updateTimeOrder) {
            $res['UpdateTimeOrder'] = $this->updateTimeOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPurchasedDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndOperationTime'])) {
            $model->endOperationTime = $map['EndOperationTime'];
        }
        if (isset($map['OpTimeOrder'])) {
            $model->opTimeOrder = $map['OpTimeOrder'];
        }
        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['StartOperationTime'])) {
            $model->startOperationTime = $map['StartOperationTime'];
        }
        if (isset($map['UpdateTimeOrder'])) {
            $model->updateTimeOrder = $map['UpdateTimeOrder'];
        }

        return $model;
    }
}

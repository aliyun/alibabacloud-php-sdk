<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody\data\evaluateList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The data returned.
     *
     * @var evaluateList
     */
    public $evaluateList;

    /**
     * @description The ID of the host.
     *
     * @example cn
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The number of the page returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The invoiced amount that meets the query conditions. Unit: Cent.
     *
     * @example 12344
     *
     * @var int
     */
    public $totalInvoiceAmount;

    /**
     * @description The invoiceable amount that meets the query conditions. Unit: Cent.
     *
     * @example 12344
     *
     * @var int
     */
    public $totalUnAppliedInvoiceAmount;
    protected $_name = [
        'evaluateList'                => 'EvaluateList',
        'hostId'                      => 'HostId',
        'pageNum'                     => 'PageNum',
        'pageSize'                    => 'PageSize',
        'totalCount'                  => 'TotalCount',
        'totalInvoiceAmount'          => 'TotalInvoiceAmount',
        'totalUnAppliedInvoiceAmount' => 'TotalUnAppliedInvoiceAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluateList) {
            $res['EvaluateList'] = null !== $this->evaluateList ? $this->evaluateList->toMap() : null;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalInvoiceAmount) {
            $res['TotalInvoiceAmount'] = $this->totalInvoiceAmount;
        }
        if (null !== $this->totalUnAppliedInvoiceAmount) {
            $res['TotalUnAppliedInvoiceAmount'] = $this->totalUnAppliedInvoiceAmount;
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
        if (isset($map['EvaluateList'])) {
            $model->evaluateList = evaluateList::fromMap($map['EvaluateList']);
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalInvoiceAmount'])) {
            $model->totalInvoiceAmount = $map['TotalInvoiceAmount'];
        }
        if (isset($map['TotalUnAppliedInvoiceAmount'])) {
            $model->totalUnAppliedInvoiceAmount = $map['TotalUnAppliedInvoiceAmount'];
        }

        return $model;
    }
}

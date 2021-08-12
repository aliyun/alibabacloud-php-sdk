<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody\data\evaluateList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $totalUnAppliedInvoiceAmount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalInvoiceAmount;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var evaluateList
     */
    public $evaluateList;
    protected $_name = [
        'pageNum'                     => 'PageNum',
        'totalUnAppliedInvoiceAmount' => 'TotalUnAppliedInvoiceAmount',
        'pageSize'                    => 'PageSize',
        'totalCount'                  => 'TotalCount',
        'totalInvoiceAmount'          => 'TotalInvoiceAmount',
        'hostId'                      => 'HostId',
        'evaluateList'                => 'EvaluateList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->totalUnAppliedInvoiceAmount) {
            $res['TotalUnAppliedInvoiceAmount'] = $this->totalUnAppliedInvoiceAmount;
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
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->evaluateList) {
            $res['EvaluateList'] = null !== $this->evaluateList ? $this->evaluateList->toMap() : null;
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
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['TotalUnAppliedInvoiceAmount'])) {
            $model->totalUnAppliedInvoiceAmount = $map['TotalUnAppliedInvoiceAmount'];
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['EvaluateList'])) {
            $model->evaluateList = evaluateList::fromMap($map['EvaluateList']);
        }

        return $model;
    }
}

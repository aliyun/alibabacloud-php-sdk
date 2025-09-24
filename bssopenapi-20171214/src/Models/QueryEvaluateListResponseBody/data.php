<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody\data\evaluateList;

class data extends Model
{
    /**
     * @var evaluateList
     */
    public $evaluateList;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var int
     */
    public $pageNum;

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
     * @var int
     */
    public $totalUnAppliedInvoiceAmount;
    protected $_name = [
        'evaluateList' => 'EvaluateList',
        'hostId' => 'HostId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'totalInvoiceAmount' => 'TotalInvoiceAmount',
        'totalUnAppliedInvoiceAmount' => 'TotalUnAppliedInvoiceAmount',
    ];

    public function validate()
    {
        if (null !== $this->evaluateList) {
            $this->evaluateList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluateList) {
            $res['EvaluateList'] = null !== $this->evaluateList ? $this->evaluateList->toArray($noStream) : $this->evaluateList;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

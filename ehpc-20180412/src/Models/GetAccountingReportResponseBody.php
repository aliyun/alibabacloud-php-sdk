<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetAccountingReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $metrics;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $totalCoreTime;

    /**
     * @var string[]
     */
    public $data;
    protected $_name = [
        'metrics'       => 'Metrics',
        'totalCount'    => 'TotalCount',
        'requestId'     => 'RequestId',
        'pageSize'      => 'PageSize',
        'pageNumber'    => 'PageNumber',
        'totalCoreTime' => 'TotalCoreTime',
        'data'          => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCoreTime) {
            $res['TotalCoreTime'] = $this->totalCoreTime;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountingReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCoreTime'])) {
            $model->totalCoreTime = $map['TotalCoreTime'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = $map['Data'];
            }
        }

        return $model;
    }
}

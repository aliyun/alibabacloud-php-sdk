<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAccountingReportResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetAccountingReportResponseBody extends Model
{
    /**
     * @description The list serialized in the JSON format. The list contains multiple records.
     *
     * @var data
     */
    public $data;

    /**
     * @description The list serialized in the JSON format. The list contains the column names of each record in the Data.
     *
     * @example [\"user\",\"coreTime\",\"usedMem\"]
     *
     * @var string
     */
    public $metrics;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example B1DCB399-9333-4B38-A35A-0BDFABC71881
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of CPU cores in the queried cluster.
     *
     * @example 261300
     *
     * @var int
     */
    public $totalCoreTime;

    /**
     * @description The total number of entries.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'data'          => 'Data',
        'metrics'       => 'Metrics',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'totalCoreTime' => 'TotalCoreTime',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCoreTime) {
            $res['TotalCoreTime'] = $this->totalCoreTime;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCoreTime'])) {
            $model->totalCoreTime = $map['TotalCoreTime'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

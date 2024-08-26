<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionTaskReportsResponseBody\inspectionReportList;
use AlibabaCloud\Tea\Model;

class ListNisInspectionTaskReportsResponseBody extends Model
{
    /**
     * @var inspectionReportList[]
     */
    public $inspectionReportList;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example hKrS+MVXkuOgztXnvdml194Cz/lMNdmr+DEh0th6dVlNEo/F148UPCh2itDku7Qj
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 0D213AF9-7B8A-51A8-B411-2D797A1A447B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 34
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'inspectionReportList' => 'InspectionReportList',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionReportList) {
            $res['InspectionReportList'] = [];
            if (null !== $this->inspectionReportList && \is_array($this->inspectionReportList)) {
                $n = 0;
                foreach ($this->inspectionReportList as $item) {
                    $res['InspectionReportList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNisInspectionTaskReportsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionReportList'])) {
            if (!empty($map['InspectionReportList'])) {
                $model->inspectionReportList = [];
                $n                           = 0;
                foreach ($map['InspectionReportList'] as $item) {
                    $model->inspectionReportList[$n++] = null !== $item ? inspectionReportList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

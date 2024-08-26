<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponseBody\checkItemList;
use AlibabaCloud\Tea\Model;

class DescribeNisInspectionReportCheckItemsResponseBody extends Model
{
    /**
     * @var checkItemList[]
     */
    public $checkItemList;

    /**
     * @example nir-ffd1af****196d0
     *
     * @var string
     */
    public $inspectionReportId;

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
     * @example D5E98683-355B-5867-8D3D-A24755F6895B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 11
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'checkItemList'      => 'CheckItemList',
        'inspectionReportId' => 'InspectionReportId',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItemList) {
            $res['CheckItemList'] = [];
            if (null !== $this->checkItemList && \is_array($this->checkItemList)) {
                $n = 0;
                foreach ($this->checkItemList as $item) {
                    $res['CheckItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inspectionReportId) {
            $res['InspectionReportId'] = $this->inspectionReportId;
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
     * @return DescribeNisInspectionReportCheckItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckItemList'])) {
            if (!empty($map['CheckItemList'])) {
                $model->checkItemList = [];
                $n                    = 0;
                foreach ($map['CheckItemList'] as $item) {
                    $model->checkItemList[$n++] = null !== $item ? checkItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InspectionReportId'])) {
            $model->inspectionReportId = $map['InspectionReportId'];
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

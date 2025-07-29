<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserStreamMetricDataResponseBody\streamDetailData;
use AlibabaCloud\Tea\Model;

class DescribeLiveUserStreamMetricDataResponseBody extends Model
{
    /**
     * @example test.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description YYYY-MM-DDThh:mm:ssZ
     *
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @var streamDetailData[]
     */
    public $streamDetailData;

    /**
     * @example 50
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'streamDetailData' => 'StreamDetailData',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamDetailData) {
            $res['StreamDetailData'] = [];
            if (null !== $this->streamDetailData && \is_array($this->streamDetailData)) {
                $n = 0;
                foreach ($this->streamDetailData as $item) {
                    $res['StreamDetailData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveUserStreamMetricDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamDetailData'])) {
            if (!empty($map['StreamDetailData'])) {
                $model->streamDetailData = [];
                $n = 0;
                foreach ($map['StreamDetailData'] as $item) {
                    $model->streamDetailData[$n++] = null !== $item ? streamDetailData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

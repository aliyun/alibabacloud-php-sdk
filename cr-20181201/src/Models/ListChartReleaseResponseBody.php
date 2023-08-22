<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartReleaseResponseBody\chartReleases;
use AlibabaCloud\Tea\Model;

class ListChartReleaseResponseBody extends Model
{
    /**
     * @description The list of chart versions.
     *
     * @var chartReleases[]
     */
    public $chartReleases;

    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries returned per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example F68823F6-F1B5-4A4E-8421-A83CAB8F2963
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned entries.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'chartReleases' => 'ChartReleases',
        'code'          => 'Code',
        'isSuccess'     => 'IsSuccess',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chartReleases) {
            $res['ChartReleases'] = [];
            if (null !== $this->chartReleases && \is_array($this->chartReleases)) {
                $n = 0;
                foreach ($this->chartReleases as $item) {
                    $res['ChartReleases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return ListChartReleaseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChartReleases'])) {
            if (!empty($map['ChartReleases'])) {
                $model->chartReleases = [];
                $n                    = 0;
                foreach ($map['ChartReleases'] as $item) {
                    $model->chartReleases[$n++] = null !== $item ? chartReleases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

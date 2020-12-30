<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartReleaseResponseBody\chartReleases;
use AlibabaCloud\Tea\Model;

class ListChartReleaseResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
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
     * @var chartReleases[]
     */
    public $chartReleases;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'isSuccess'     => 'IsSuccess',
        'totalCount'    => 'TotalCount',
        'requestId'     => 'RequestId',
        'pageSize'      => 'PageSize',
        'chartReleases' => 'ChartReleases',
        'pageNo'        => 'PageNo',
        'code'          => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
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
        if (null !== $this->chartReleases) {
            $res['ChartReleases'] = [];
            if (null !== $this->chartReleases && \is_array($this->chartReleases)) {
                $n = 0;
                foreach ($this->chartReleases as $item) {
                    $res['ChartReleases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
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
        if (isset($map['ChartReleases'])) {
            if (!empty($map['ChartReleases'])) {
                $model->chartReleases = [];
                $n                    = 0;
                foreach ($map['ChartReleases'] as $item) {
                    $model->chartReleases[$n++] = null !== $item ? chartReleases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartReleaseResponseBody\chartReleases;
use AlibabaCloud\Tea\Model;

class ListChartReleaseResponseBody extends Model
{
    /**
     * @var chartReleases[]
     */
    public $chartReleases;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
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

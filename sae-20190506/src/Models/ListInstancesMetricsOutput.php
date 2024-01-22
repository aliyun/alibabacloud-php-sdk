<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesMetricsOutput extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var InstanceMetricInfo[]
     */
    public $metricsList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1234
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'   => 'RequestId',
        'metricsList' => 'metricsList',
        'pageNumber'  => 'pageNumber',
        'pageSize'    => 'pageSize',
        'totalCount'  => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->metricsList) {
            $res['metricsList'] = [];
            if (null !== $this->metricsList && \is_array($this->metricsList)) {
                $n = 0;
                foreach ($this->metricsList as $item) {
                    $res['metricsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesMetricsOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['metricsList'])) {
            if (!empty($map['metricsList'])) {
                $model->metricsList = [];
                $n                  = 0;
                foreach ($map['metricsList'] as $item) {
                    $model->metricsList[$n++] = null !== $item ? InstanceMetricInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}

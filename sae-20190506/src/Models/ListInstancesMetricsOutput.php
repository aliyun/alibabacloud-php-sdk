<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'metricsList' => 'metricsList',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->metricsList)) {
            Model::validateArray($this->metricsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->metricsList) {
            if (\is_array($this->metricsList)) {
                $res['metricsList'] = [];
                $n1 = 0;
                foreach ($this->metricsList as $item1) {
                    $res['metricsList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['metricsList'])) {
            if (!empty($map['metricsList'])) {
                $model->metricsList = [];
                $n1 = 0;
                foreach ($map['metricsList'] as $item1) {
                    $model->metricsList[$n1++] = InstanceMetricInfo::fromMap($item1);
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

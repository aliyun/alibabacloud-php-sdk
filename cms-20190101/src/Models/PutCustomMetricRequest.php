<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomMetricRequest\metricList;
use AlibabaCloud\Tea\Model;

class PutCustomMetricRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var metricList[]
     */
    public $metricList;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'metricList' => 'MetricList',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricList) {
            $res['MetricList'] = [];
            if (null !== $this->metricList && \is_array($this->metricList)) {
                $n = 0;
                foreach ($this->metricList as $item) {
                    $res['MetricList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutCustomMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricList'])) {
            if (!empty($map['MetricList'])) {
                $model->metricList = [];
                $n                 = 0;
                foreach ($map['MetricList'] as $item) {
                    $model->metricList[$n++] = null !== $item ? metricList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

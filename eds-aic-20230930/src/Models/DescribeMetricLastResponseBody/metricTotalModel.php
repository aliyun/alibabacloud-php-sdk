<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponseBody\metricTotalModel\metricModelList;
use AlibabaCloud\Tea\Model;

class metricTotalModel extends Model
{
    /**
     * @example acp-fkuit0cmyru4p****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @var metricModelList[]
     */
    public $metricModelList;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'metricModelList' => 'MetricModelList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }
        if (null !== $this->metricModelList) {
            $res['MetricModelList'] = [];
            if (null !== $this->metricModelList && \is_array($this->metricModelList)) {
                $n = 0;
                foreach ($this->metricModelList as $item) {
                    $res['MetricModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricTotalModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }
        if (isset($map['MetricModelList'])) {
            if (!empty($map['MetricModelList'])) {
                $model->metricModelList = [];
                $n = 0;
                foreach ($map['MetricModelList'] as $item) {
                    $model->metricModelList[$n++] = null !== $item ? metricModelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

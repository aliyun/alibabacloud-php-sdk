<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeMetricDataResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @description The datapoints that consist of consecutive timestamps in seconds and metric values that were recorded at these time points.
     *
     * @example {
     * }
     * @var mixed
     */
    public $datapoints;

    /**
     * @description The tags.
     *
     * @example {"DiskId": "d-1234"}
     *
     * @var mixed
     */
    public $labels;
    protected $_name = [
        'datapoints' => 'Datapoints',
        'labels'     => 'Labels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datapoints) {
            $res['Datapoints'] = $this->datapoints;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datapoints'])) {
            $model->datapoints = $map['Datapoints'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        return $model;
    }
}

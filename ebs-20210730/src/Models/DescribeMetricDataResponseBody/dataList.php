<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeMetricDataResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var mixed
     */
    public $datapoints;

    /**
     * @var mixed
     */
    public $labels;
    protected $_name = [
        'datapoints' => 'Datapoints',
        'labels' => 'Labels',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

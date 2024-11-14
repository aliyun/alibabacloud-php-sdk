<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\GetReportResponseBody\datas;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Data Points.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $dataPoints;

    /**
     * @description Data Labels.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $labels;
    protected $_name = [
        'dataPoints' => 'DataPoints',
        'labels'     => 'Labels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPoints) {
            $res['DataPoints'] = $this->dataPoints;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPoints'])) {
            $model->dataPoints = $map['DataPoints'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        return $model;
    }
}

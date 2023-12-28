<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source;

use AlibabaCloud\Tea\Model;

class sourcePrometheusParameters extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $labels;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dataType'  => 'DataType',
        'labels'    => 'Labels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourcePrometheusParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        return $model;
    }
}

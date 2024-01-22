<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListMetricsOutput extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var MetricInfo[][]
     */
    public $metrics;
    protected $_name = [
        'requestId' => 'RequestId',
        'metrics'   => 'metrics',
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
        if (null !== $this->metrics) {
            $res['metrics'] = $this->metrics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMetricsOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['metrics'])) {
            $model->metrics = $map['metrics'];
        }

        return $model;
    }
}

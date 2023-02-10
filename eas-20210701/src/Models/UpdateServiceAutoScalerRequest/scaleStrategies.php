<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest;

use AlibabaCloud\Tea\Model;

class scaleStrategies extends Model
{
    /**
     * @example qps
     *
     * @var string
     */
    public $metricName;

    /**
     * @example demo_svc
     *
     * @var string
     */
    public $service;

    /**
     * @example 100
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'metricName' => 'metricName',
        'service'    => 'service',
        'threshold'  => 'threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scaleStrategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        return $model;
    }
}

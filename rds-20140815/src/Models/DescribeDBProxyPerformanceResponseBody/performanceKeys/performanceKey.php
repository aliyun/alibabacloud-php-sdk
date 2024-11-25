<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceResponseBody\performanceKeys;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceResponseBody\performanceKeys\performanceKey\values;
use AlibabaCloud\Tea\Model;

class performanceKey extends Model
{
    /**
     * @description The performance parameter.
     *
     * @example cpu_ratio
     *
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $service;

    /**
     * @description The format in which the value of the performance metric is returned.
     *
     * @example docker_container_cpu
     *
     * @var string
     */
    public $valueFormat;

    /**
     * @description The performance metrics.
     *
     * @var values
     */
    public $values;
    protected $_name = [
        'key'         => 'Key',
        'service'     => 'Service',
        'valueFormat' => 'ValueFormat',
        'values'      => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->valueFormat) {
            $res['ValueFormat'] = $this->valueFormat;
        }
        if (null !== $this->values) {
            $res['Values'] = null !== $this->values ? $this->values->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['ValueFormat'])) {
            $model->valueFormat = $map['ValueFormat'];
        }
        if (isset($map['Values'])) {
            $model->values = values::fromMap($map['Values']);
        }

        return $model;
    }
}

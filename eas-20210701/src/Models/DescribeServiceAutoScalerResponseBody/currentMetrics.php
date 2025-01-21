<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceAutoScalerResponseBody;

use AlibabaCloud\Dara\Model;

class currentMetrics extends Model
{
    /**
     * @var string
     */
    public $metricName;
    /**
     * @var string
     */
    public $service;
    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'metricName' => 'metricName',
        'service'    => 'service',
        'value'      => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }

        if (null !== $this->service) {
            $res['service'] = $this->service;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }

        if (isset($map['service'])) {
            $model->service = $map['service'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}

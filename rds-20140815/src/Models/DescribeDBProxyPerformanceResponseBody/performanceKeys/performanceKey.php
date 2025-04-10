<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceResponseBody\performanceKeys;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceResponseBody\performanceKeys\performanceKey\values;

class performanceKey extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $node;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $valueFormat;

    /**
     * @var values
     */
    public $values;
    protected $_name = [
        'key' => 'Key',
        'node' => 'Node',
        'service' => 'Service',
        'valueFormat' => 'ValueFormat',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (null !== $this->values) {
            $this->values->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->node) {
            $res['Node'] = $this->node;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        if (null !== $this->valueFormat) {
            $res['ValueFormat'] = $this->valueFormat;
        }

        if (null !== $this->values) {
            $res['Values'] = null !== $this->values ? $this->values->toArray($noStream) : $this->values;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Node'])) {
            $model->node = $map['Node'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSupportMaxPerformanceResponseBody\performances;

use AlibabaCloud\Dara\Model;

class performance extends Model
{
    /**
     * @var string
     */
    public $bottleneck;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'bottleneck' => 'Bottleneck',
        'key' => 'Key',
        'unit' => 'Unit',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bottleneck) {
            $res['Bottleneck'] = $this->bottleneck;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Bottleneck'])) {
            $model->bottleneck = $map['Bottleneck'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

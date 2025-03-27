<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricRequest\filter;

use AlibabaCloud\Dara\Model;

class conditions extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $opValue;

    /**
     * @var mixed
     */
    public $values;
    protected $_name = [
        'key' => 'Key',
        'opValue' => 'OpValue',
        'values' => 'Values',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->opValue) {
            $res['OpValue'] = $this->opValue;
        }

        if (null !== $this->values) {
            $res['Values'] = $this->values;
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

        if (isset($map['OpValue'])) {
            $model->opValue = $map['OpValue'];
        }

        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}

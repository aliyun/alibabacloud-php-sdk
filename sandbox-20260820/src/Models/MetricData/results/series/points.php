<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models\MetricData\results\series;

use AlibabaCloud\Dara\Model;

class points extends Model
{
    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'timestamp' => 'timestamp',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}

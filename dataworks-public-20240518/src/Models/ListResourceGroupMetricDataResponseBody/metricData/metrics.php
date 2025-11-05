<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupMetricDataResponseBody\metricData;

use AlibabaCloud\Dara\Model;

class metrics extends Model
{
    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'timestamp' => 'Timestamp',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailResponseBody\data;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailResponseBody\data\causeDetails\value;
use AlibabaCloud\Tea\Model;

class causeDetails extends Model
{
    /**
     * @description The key that is used to trace the alert event.
     *
     * @example 842e314e69b1a2c45d5c1a2f88a16***
     *
     * @var string
     */
    public $key;

    /**
     * @description The value that is used to trace the alert event.
     *
     * @var value[]
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = [];
            if (null !== $this->value && \is_array($this->value)) {
                $n = 0;
                foreach ($this->value as $item) {
                    $res['Value'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return causeDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = [];
                $n            = 0;
                foreach ($map['Value'] as $item) {
                    $model->value[$n++] = null !== $item ? value::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

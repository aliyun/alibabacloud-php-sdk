<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponseBody\listeners\config;

use AlibabaCloud\Tea\Model;

class payloadLength extends Model
{
    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $min;
    protected $_name = [
        'max' => 'Max',
        'min' => 'Min',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payloadLength
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        return $model;
    }
}

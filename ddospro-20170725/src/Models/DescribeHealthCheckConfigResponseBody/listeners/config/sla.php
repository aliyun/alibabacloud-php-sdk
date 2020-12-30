<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponseBody\listeners\config;

use AlibabaCloud\Tea\Model;

class sla extends Model
{
    /**
     * @var int
     */
    public $cpsEnable;

    /**
     * @var int
     */
    public $cps;

    /**
     * @var int
     */
    public $maxConnEnable;

    /**
     * @var int
     */
    public $maxConn;
    protected $_name = [
        'cpsEnable'     => 'CpsEnable',
        'cps'           => 'Cps',
        'maxConnEnable' => 'MaxConnEnable',
        'maxConn'       => 'MaxConn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpsEnable) {
            $res['CpsEnable'] = $this->cpsEnable;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->maxConnEnable) {
            $res['MaxConnEnable'] = $this->maxConnEnable;
        }
        if (null !== $this->maxConn) {
            $res['MaxConn'] = $this->maxConn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sla
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpsEnable'])) {
            $model->cpsEnable = $map['CpsEnable'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['MaxConnEnable'])) {
            $model->maxConnEnable = $map['MaxConnEnable'];
        }
        if (isset($map['MaxConn'])) {
            $model->maxConn = $map['MaxConn'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponseBody\listeners\config;

use AlibabaCloud\Tea\Model;

class sla extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $cps;

    /**
     * @example 0
     *
     * @var int
     */
    public $cpsEnable;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxconn;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxconnEnable;
    protected $_name = [
        'cps'           => 'Cps',
        'cpsEnable'     => 'CpsEnable',
        'maxconn'       => 'Maxconn',
        'maxconnEnable' => 'MaxconnEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->cpsEnable) {
            $res['CpsEnable'] = $this->cpsEnable;
        }
        if (null !== $this->maxconn) {
            $res['Maxconn'] = $this->maxconn;
        }
        if (null !== $this->maxconnEnable) {
            $res['MaxconnEnable'] = $this->maxconnEnable;
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
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['CpsEnable'])) {
            $model->cpsEnable = $map['CpsEnable'];
        }
        if (isset($map['Maxconn'])) {
            $model->maxconn = $map['Maxconn'];
        }
        if (isset($map['MaxconnEnable'])) {
            $model->maxconnEnable = $map['MaxconnEnable'];
        }

        return $model;
    }
}

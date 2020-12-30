<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponseBody\listeners\config;

use AlibabaCloud\Tea\Model;

class sla extends Model
{
    /**
     * @var int
     */
    public $maxconnEnable;

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
    public $maxconn;
    protected $_name = [
        'maxconnEnable' => 'MaxconnEnable',
        'cpsEnable'     => 'CpsEnable',
        'cps'           => 'Cps',
        'maxconn'       => 'Maxconn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxconnEnable) {
            $res['MaxconnEnable'] = $this->maxconnEnable;
        }
        if (null !== $this->cpsEnable) {
            $res['CpsEnable'] = $this->cpsEnable;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->maxconn) {
            $res['Maxconn'] = $this->maxconn;
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
        if (isset($map['MaxconnEnable'])) {
            $model->maxconnEnable = $map['MaxconnEnable'];
        }
        if (isset($map['CpsEnable'])) {
            $model->cpsEnable = $map['CpsEnable'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['Maxconn'])) {
            $model->maxconn = $map['Maxconn'];
        }

        return $model;
    }
}

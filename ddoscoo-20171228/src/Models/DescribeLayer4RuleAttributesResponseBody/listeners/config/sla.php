<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponseBody\listeners\config;

use AlibabaCloud\Dara\Model;

class sla extends Model
{
    /**
     * @var int
     */
    public $cps;

    /**
     * @var int
     */
    public $cpsEnable;

    /**
     * @var int
     */
    public $maxconn;

    /**
     * @var int
     */
    public $maxconnEnable;
    protected $_name = [
        'cps' => 'Cps',
        'cpsEnable' => 'CpsEnable',
        'maxconn' => 'Maxconn',
        'maxconnEnable' => 'MaxconnEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

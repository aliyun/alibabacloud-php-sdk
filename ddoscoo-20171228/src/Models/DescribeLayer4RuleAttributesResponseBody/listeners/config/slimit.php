<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponseBody\listeners\config;

use AlibabaCloud\Tea\Model;

class slimit extends Model
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
    public $pps;

    /**
     * @var int
     */
    public $bps;

    /**
     * @var int
     */
    public $maxconn;

    /**
     * @var int
     */
    public $cpsMode;
    protected $_name = [
        'maxconnEnable' => 'MaxconnEnable',
        'cpsEnable'     => 'CpsEnable',
        'cps'           => 'Cps',
        'pps'           => 'Pps',
        'bps'           => 'Bps',
        'maxconn'       => 'Maxconn',
        'cpsMode'       => 'CpsMode',
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
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->maxconn) {
            $res['Maxconn'] = $this->maxconn;
        }
        if (null !== $this->cpsMode) {
            $res['CpsMode'] = $this->cpsMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slimit
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
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Maxconn'])) {
            $model->maxconn = $map['Maxconn'];
        }
        if (isset($map['CpsMode'])) {
            $model->cpsMode = $map['CpsMode'];
        }

        return $model;
    }
}

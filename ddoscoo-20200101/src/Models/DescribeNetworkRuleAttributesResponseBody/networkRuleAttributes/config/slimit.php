<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config;

use AlibabaCloud\Tea\Model;

class slimit extends Model
{
    /**
     * @var int
     */
    public $bps;

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
    public $cpsMode;

    /**
     * @var int
     */
    public $maxconn;

    /**
     * @var int
     */
    public $maxconnEnable;

    /**
     * @var int
     */
    public $pps;
    protected $_name = [
        'bps'           => 'Bps',
        'cps'           => 'Cps',
        'cpsEnable'     => 'CpsEnable',
        'cpsMode'       => 'CpsMode',
        'maxconn'       => 'Maxconn',
        'maxconnEnable' => 'MaxconnEnable',
        'pps'           => 'Pps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->cpsEnable) {
            $res['CpsEnable'] = $this->cpsEnable;
        }
        if (null !== $this->cpsMode) {
            $res['CpsMode'] = $this->cpsMode;
        }
        if (null !== $this->maxconn) {
            $res['Maxconn'] = $this->maxconn;
        }
        if (null !== $this->maxconnEnable) {
            $res['MaxconnEnable'] = $this->maxconnEnable;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
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
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['CpsEnable'])) {
            $model->cpsEnable = $map['CpsEnable'];
        }
        if (isset($map['CpsMode'])) {
            $model->cpsMode = $map['CpsMode'];
        }
        if (isset($map['Maxconn'])) {
            $model->maxconn = $map['Maxconn'];
        }
        if (isset($map['MaxconnEnable'])) {
            $model->maxconnEnable = $map['MaxconnEnable'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        return $model;
    }
}

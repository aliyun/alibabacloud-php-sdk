<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners\config;

use AlibabaCloud\Tea\Model;

class slimit extends Model
{
    /**
     * @var int
     */
    public $cps;

    /**
     * @var int
     */
    public $maxconn;

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
    public $maxconnEnable;

    /**
     * @var int
     */
    public $bps;

    /**
     * @var int
     */
    public $pps;
    protected $_name = [
        'cps'           => 'Cps',
        'maxconn'       => 'Maxconn',
        'cpsEnable'     => 'CpsEnable',
        'cpsMode'       => 'CpsMode',
        'maxconnEnable' => 'MaxconnEnable',
        'bps'           => 'Bps',
        'pps'           => 'Pps',
    ];

    public function validate()
    {
        Model::validateRequired('cps', $this->cps, true);
        Model::validateRequired('maxconn', $this->maxconn, true);
        Model::validateRequired('cpsEnable', $this->cpsEnable, true);
        Model::validateRequired('cpsMode', $this->cpsMode, true);
        Model::validateRequired('maxconnEnable', $this->maxconnEnable, true);
        Model::validateRequired('bps', $this->bps, true);
        Model::validateRequired('pps', $this->pps, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->maxconn) {
            $res['Maxconn'] = $this->maxconn;
        }
        if (null !== $this->cpsEnable) {
            $res['CpsEnable'] = $this->cpsEnable;
        }
        if (null !== $this->cpsMode) {
            $res['CpsMode'] = $this->cpsMode;
        }
        if (null !== $this->maxconnEnable) {
            $res['MaxconnEnable'] = $this->maxconnEnable;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
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
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['Maxconn'])) {
            $model->maxconn = $map['Maxconn'];
        }
        if (isset($map['CpsEnable'])) {
            $model->cpsEnable = $map['CpsEnable'];
        }
        if (isset($map['CpsMode'])) {
            $model->cpsMode = $map['CpsMode'];
        }
        if (isset($map['MaxconnEnable'])) {
            $model->maxconnEnable = $map['MaxconnEnable'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        return $model;
    }
}

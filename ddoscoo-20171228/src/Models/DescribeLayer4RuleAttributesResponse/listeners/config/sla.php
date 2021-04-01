<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners\config;

use AlibabaCloud\Tea\Model;

class sla extends Model
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
    public $maxconnEnable;
    protected $_name = [
        'cps'           => 'Cps',
        'maxconn'       => 'Maxconn',
        'cpsEnable'     => 'CpsEnable',
        'maxconnEnable' => 'MaxconnEnable',
    ];

    public function validate()
    {
        Model::validateRequired('cps', $this->cps, true);
        Model::validateRequired('maxconn', $this->maxconn, true);
        Model::validateRequired('cpsEnable', $this->cpsEnable, true);
        Model::validateRequired('maxconnEnable', $this->maxconnEnable, true);
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
        if (isset($map['Maxconn'])) {
            $model->maxconn = $map['Maxconn'];
        }
        if (isset($map['CpsEnable'])) {
            $model->cpsEnable = $map['CpsEnable'];
        }
        if (isset($map['MaxconnEnable'])) {
            $model->maxconnEnable = $map['MaxconnEnable'];
        }

        return $model;
    }
}

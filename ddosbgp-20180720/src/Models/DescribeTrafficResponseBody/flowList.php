<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponseBody;

use AlibabaCloud\Tea\Model;

class flowList extends Model
{
    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $flowType;

    /**
     * @var int
     */
    public $attackPps;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pps;

    /**
     * @var int
     */
    public $kbps;

    /**
     * @var int
     */
    public $attackBps;
    protected $_name = [
        'time'      => 'Time',
        'flowType'  => 'FlowType',
        'attackPps' => 'AttackPps',
        'name'      => 'Name',
        'pps'       => 'Pps',
        'kbps'      => 'Kbps',
        'attackBps' => 'AttackBps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }
        if (null !== $this->attackPps) {
            $res['AttackPps'] = $this->attackPps;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->kbps) {
            $res['Kbps'] = $this->kbps;
        }
        if (null !== $this->attackBps) {
            $res['AttackBps'] = $this->attackBps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }
        if (isset($map['AttackPps'])) {
            $model->attackPps = $map['AttackPps'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['Kbps'])) {
            $model->kbps = $map['Kbps'];
        }
        if (isset($map['AttackBps'])) {
            $model->attackBps = $map['AttackBps'];
        }

        return $model;
    }
}

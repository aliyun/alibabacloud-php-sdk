<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponse;

use AlibabaCloud\Tea\Model;

class flowList extends Model
{
    /**
     * @var int
     */
    public $pps;

    /**
     * @var string
     */
    public $flowType;

    /**
     * @var int
     */
    public $kbps;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $attackBps;

    /**
     * @var int
     */
    public $attackPps;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'pps'       => 'Pps',
        'flowType'  => 'FlowType',
        'kbps'      => 'Kbps',
        'name'      => 'Name',
        'attackBps' => 'AttackBps',
        'attackPps' => 'AttackPps',
        'time'      => 'Time',
    ];

    public function validate()
    {
        Model::validateRequired('pps', $this->pps, true);
        Model::validateRequired('flowType', $this->flowType, true);
        Model::validateRequired('kbps', $this->kbps, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('attackBps', $this->attackBps, true);
        Model::validateRequired('attackPps', $this->attackPps, true);
        Model::validateRequired('time', $this->time, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }
        if (null !== $this->kbps) {
            $res['Kbps'] = $this->kbps;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->attackBps) {
            $res['AttackBps'] = $this->attackBps;
        }
        if (null !== $this->attackPps) {
            $res['AttackPps'] = $this->attackPps;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }
        if (isset($map['Kbps'])) {
            $model->kbps = $map['Kbps'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AttackBps'])) {
            $model->attackBps = $map['AttackBps'];
        }
        if (isset($map['AttackPps'])) {
            $model->attackPps = $map['AttackPps'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

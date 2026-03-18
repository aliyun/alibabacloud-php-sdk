<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponseBody;

use AlibabaCloud\Dara\Model;

class flowList extends Model
{
    /**
     * @var int
     */
    public $attackBps;

    /**
     * @var int
     */
    public $attackPps;

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
    public $pps;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'attackBps' => 'AttackBps',
        'attackPps' => 'AttackPps',
        'flowType' => 'FlowType',
        'kbps' => 'Kbps',
        'name' => 'Name',
        'pps' => 'Pps',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackBps) {
            $res['AttackBps'] = $this->attackBps;
        }

        if (null !== $this->attackPps) {
            $res['AttackPps'] = $this->attackPps;
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

        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['AttackBps'])) {
            $model->attackBps = $map['AttackBps'];
        }

        if (isset($map['AttackPps'])) {
            $model->attackPps = $map['AttackPps'];
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

        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

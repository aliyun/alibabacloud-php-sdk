<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponseBody;

use AlibabaCloud\Tea\Model;

class flowList extends Model
{
    /**
     * @description The bandwidth of attack traffic. Unit: bit/s.
     *
     * >  This parameter is returned only if attack traffic exists.
     * @example 0
     *
     * @var int
     */
    public $attackBps;

    /**
     * @description The packet forwarding rate of attack traffic. Unit: packets per second.
     *
     * >  This parameter is returned only if attack traffic exists.
     * @example 0
     *
     * @var int
     */
    public $attackPps;

    /**
     * @description The type of the traffic statistics. Valid values:
     *
     *   **max**: the peak traffic within the specified interval
     *   **avg**: the average traffic within the specified interval
     *
     * @example max
     *
     * @var string
     */
    public $flowType;

    /**
     * @description The bandwidth of the total traffic. Unit: Kbit/s.
     *
     * @example 417
     *
     * @var int
     */
    public $kbps;

    /**
     * @description The ID of the traffic statistics.
     *
     * @example 8e33f19e-5644-11eb-b5c1-d89d67182200
     *
     * @var string
     */
    public $name;

    /**
     * @description The packet forwarding rate of the total traffic. Unit: packets per second.
     *
     * @example 274
     *
     * @var int
     */
    public $pps;

    /**
     * @description The time when the traffic statistics are calculated. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1620951900
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'attackBps' => 'AttackBps',
        'attackPps' => 'AttackPps',
        'flowType'  => 'FlowType',
        'kbps'      => 'Kbps',
        'name'      => 'Name',
        'pps'       => 'Pps',
        'time'      => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return flowList
     */
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

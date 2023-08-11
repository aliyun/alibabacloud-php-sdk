<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponseBody;

use AlibabaCloud\Tea\Model;

class flowList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $attackBps;

    /**
     * @description Queries traffic statistics of an Anti-DDoS Origin instance within a specific time period.
     *
     * @example 0
     *
     * @var int
     */
    public $attackPps;

    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~118841~~).
     *
     * For more information about sample requests, see the "**Examples**" section of this topic.
     * @example max
     *
     * @var string
     */
    public $flowType;

    /**
     * @example 417
     *
     * @var int
     */
    public $kbps;

    /**
     * @description DescribeTraffic
     *
     * @example 8e33f19e-5644-11eb-b5c1-d89d67182200
     *
     * @var string
     */
    public $name;

    /**
     * @description WB269094
     *
     * @example 274
     *
     * @var int
     */
    public $pps;

    /**
     * @description The ID of the request.
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

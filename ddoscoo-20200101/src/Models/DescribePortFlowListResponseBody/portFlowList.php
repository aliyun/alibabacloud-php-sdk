<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortFlowListResponseBody;

use AlibabaCloud\Tea\Model;

class portFlowList extends Model
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
     * @var int
     */
    public $inBps;

    /**
     * @var int
     */
    public $inPps;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $outBps;

    /**
     * @var int
     */
    public $outPps;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'attackBps' => 'AttackBps',
        'attackPps' => 'AttackPps',
        'inBps'     => 'InBps',
        'inPps'     => 'InPps',
        'index'     => 'Index',
        'outBps'    => 'OutBps',
        'outPps'    => 'OutPps',
        'region'    => 'Region',
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
        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }
        if (null !== $this->inPps) {
            $res['InPps'] = $this->inPps;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->outBps) {
            $res['OutBps'] = $this->outBps;
        }
        if (null !== $this->outPps) {
            $res['OutPps'] = $this->outPps;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portFlowList
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
        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }
        if (isset($map['InPps'])) {
            $model->inPps = $map['InPps'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['OutBps'])) {
            $model->outBps = $map['OutBps'];
        }
        if (isset($map['OutPps'])) {
            $model->outPps = $map['OutPps'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

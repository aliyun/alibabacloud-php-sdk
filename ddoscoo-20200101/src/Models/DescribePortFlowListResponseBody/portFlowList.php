<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortFlowListResponseBody;

use AlibabaCloud\Tea\Model;

class portFlowList extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $inPps;

    /**
     * @var int
     */
    public $inBps;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $outPps;

    /**
     * @var int
     */
    public $attackPps;

    /**
     * @var int
     */
    public $outBps;

    /**
     * @var int
     */
    public $attackBps;
    protected $_name = [
        'index'     => 'Index',
        'time'      => 'Time',
        'inPps'     => 'InPps',
        'inBps'     => 'InBps',
        'region'    => 'Region',
        'outPps'    => 'OutPps',
        'attackPps' => 'AttackPps',
        'outBps'    => 'OutBps',
        'attackBps' => 'AttackBps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->inPps) {
            $res['InPps'] = $this->inPps;
        }
        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->outPps) {
            $res['OutPps'] = $this->outPps;
        }
        if (null !== $this->attackPps) {
            $res['AttackPps'] = $this->attackPps;
        }
        if (null !== $this->outBps) {
            $res['OutBps'] = $this->outBps;
        }
        if (null !== $this->attackBps) {
            $res['AttackBps'] = $this->attackBps;
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['InPps'])) {
            $model->inPps = $map['InPps'];
        }
        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['OutPps'])) {
            $model->outPps = $map['OutPps'];
        }
        if (isset($map['AttackPps'])) {
            $model->attackPps = $map['AttackPps'];
        }
        if (isset($map['OutBps'])) {
            $model->outBps = $map['OutBps'];
        }
        if (isset($map['AttackBps'])) {
            $model->attackBps = $map['AttackBps'];
        }

        return $model;
    }
}

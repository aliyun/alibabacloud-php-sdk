<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortFlowListResponseBody;

use AlibabaCloud\Dara\Model;

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
    public $slaBpsDropBps;
    /**
     * @var int
     */
    public $slaBpsDropPps;
    /**
     * @var int
     */
    public $slaConnDropBps;
    /**
     * @var int
     */
    public $slaConnDropPps;
    /**
     * @var int
     */
    public $slaCpsDropBps;
    /**
     * @var int
     */
    public $slaCpsDropPps;
    /**
     * @var int
     */
    public $slaPpsDropBps;
    /**
     * @var int
     */
    public $slaPpsDropPps;
    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'attackBps'      => 'AttackBps',
        'attackPps'      => 'AttackPps',
        'inBps'          => 'InBps',
        'inPps'          => 'InPps',
        'index'          => 'Index',
        'outBps'         => 'OutBps',
        'outPps'         => 'OutPps',
        'region'         => 'Region',
        'slaBpsDropBps'  => 'SlaBpsDropBps',
        'slaBpsDropPps'  => 'SlaBpsDropPps',
        'slaConnDropBps' => 'SlaConnDropBps',
        'slaConnDropPps' => 'SlaConnDropPps',
        'slaCpsDropBps'  => 'SlaCpsDropBps',
        'slaCpsDropPps'  => 'SlaCpsDropPps',
        'slaPpsDropBps'  => 'SlaPpsDropBps',
        'slaPpsDropPps'  => 'SlaPpsDropPps',
        'time'           => 'Time',
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

        if (null !== $this->slaBpsDropBps) {
            $res['SlaBpsDropBps'] = $this->slaBpsDropBps;
        }

        if (null !== $this->slaBpsDropPps) {
            $res['SlaBpsDropPps'] = $this->slaBpsDropPps;
        }

        if (null !== $this->slaConnDropBps) {
            $res['SlaConnDropBps'] = $this->slaConnDropBps;
        }

        if (null !== $this->slaConnDropPps) {
            $res['SlaConnDropPps'] = $this->slaConnDropPps;
        }

        if (null !== $this->slaCpsDropBps) {
            $res['SlaCpsDropBps'] = $this->slaCpsDropBps;
        }

        if (null !== $this->slaCpsDropPps) {
            $res['SlaCpsDropPps'] = $this->slaCpsDropPps;
        }

        if (null !== $this->slaPpsDropBps) {
            $res['SlaPpsDropBps'] = $this->slaPpsDropBps;
        }

        if (null !== $this->slaPpsDropPps) {
            $res['SlaPpsDropPps'] = $this->slaPpsDropPps;
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

        if (isset($map['SlaBpsDropBps'])) {
            $model->slaBpsDropBps = $map['SlaBpsDropBps'];
        }

        if (isset($map['SlaBpsDropPps'])) {
            $model->slaBpsDropPps = $map['SlaBpsDropPps'];
        }

        if (isset($map['SlaConnDropBps'])) {
            $model->slaConnDropBps = $map['SlaConnDropBps'];
        }

        if (isset($map['SlaConnDropPps'])) {
            $model->slaConnDropPps = $map['SlaConnDropPps'];
        }

        if (isset($map['SlaCpsDropBps'])) {
            $model->slaCpsDropBps = $map['SlaCpsDropBps'];
        }

        if (isset($map['SlaCpsDropPps'])) {
            $model->slaCpsDropPps = $map['SlaCpsDropPps'];
        }

        if (isset($map['SlaPpsDropBps'])) {
            $model->slaPpsDropBps = $map['SlaPpsDropBps'];
        }

        if (isset($map['SlaPpsDropPps'])) {
            $model->slaPpsDropPps = $map['SlaPpsDropPps'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

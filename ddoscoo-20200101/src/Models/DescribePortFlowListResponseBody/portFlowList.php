<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortFlowListResponseBody;

use AlibabaCloud\Tea\Model;

class portFlowList extends Model
{
    /**
     * @description The bandwidth of attack traffic. Unit: bit/s.
     *
     * @example 0
     *
     * @var int
     */
    public $attackBps;

    /**
     * @description The packet forwarding rate of attack traffic. Unit: pps.
     *
     * @example 0
     *
     * @var int
     */
    public $attackPps;

    /**
     * @description The inbound bandwidth. Unit: bit/s.
     *
     * @example 2176000
     *
     * @var int
     */
    public $inBps;

    /**
     * @description The packet forwarding rate of inbound traffic. Unit: packets per second.
     *
     * @example 2934
     *
     * @var int
     */
    public $inPps;

    /**
     * @description The index number of the returned data.
     *
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @description The outbound bandwidth. Unit: bit/s.
     *
     * @example 4389
     *
     * @var int
     */
    public $outBps;

    /**
     * @description The packet forwarding rate of outbound traffic. Unit: packets per second (pps).
     *
     * @example 5
     *
     * @var int
     */
    public $outPps;

    /**
     * @description The source region of the traffic. Valid values:
     *
     *   **cn**: mainland China
     *   **alb-ap-northeast-1-gf-x**: Japan (Tokyo)
     *   **alb-ap-southeast-gf-x**: Singapore
     *   **alb-cn-hongkong-gf-x**: Hong Kong (China)
     *   **alb-eu-central-1-gf-x**: Germany (Frankfurt)
     *   **alb-us-west-1-gf-x**: US (Silicon Valley)
     *
     * > The values except **cn** are returned only when **RegionId** is set to **ap-southeast-1**.
     * @example cn
     *
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
     * @description The time when the data was collected. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1582992000
     *
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

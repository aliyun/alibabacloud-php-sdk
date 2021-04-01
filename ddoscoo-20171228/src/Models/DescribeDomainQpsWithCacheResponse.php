<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainQpsWithCacheResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $totals;

    /**
     * @var string[]
     */
    public $blocks;

    /**
     * @var string[]
     */
    public $cacheHits;

    /**
     * @var string[]
     */
    public $preciseBlocks;

    /**
     * @var string[]
     */
    public $regionBlocks;

    /**
     * @var string[]
     */
    public $ipBlockQps;

    /**
     * @var string[]
     */
    public $ccJsQps;

    /**
     * @var string[]
     */
    public $preciseJsQps;

    /**
     * @var string[]
     */
    public $ccBlockQps;
    protected $_name = [
        'requestId'     => 'RequestId',
        'interval'      => 'Interval',
        'startTime'     => 'StartTime',
        'totals'        => 'Totals',
        'blocks'        => 'Blocks',
        'cacheHits'     => 'CacheHits',
        'preciseBlocks' => 'PreciseBlocks',
        'regionBlocks'  => 'RegionBlocks',
        'ipBlockQps'    => 'IpBlockQps',
        'ccJsQps'       => 'CcJsQps',
        'preciseJsQps'  => 'PreciseJsQps',
        'ccBlockQps'    => 'CcBlockQps',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('interval', $this->interval, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('totals', $this->totals, true);
        Model::validateRequired('blocks', $this->blocks, true);
        Model::validateRequired('cacheHits', $this->cacheHits, true);
        Model::validateRequired('preciseBlocks', $this->preciseBlocks, true);
        Model::validateRequired('regionBlocks', $this->regionBlocks, true);
        Model::validateRequired('ipBlockQps', $this->ipBlockQps, true);
        Model::validateRequired('ccJsQps', $this->ccJsQps, true);
        Model::validateRequired('preciseJsQps', $this->preciseJsQps, true);
        Model::validateRequired('ccBlockQps', $this->ccBlockQps, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totals) {
            $res['Totals'] = $this->totals;
        }
        if (null !== $this->blocks) {
            $res['Blocks'] = $this->blocks;
        }
        if (null !== $this->cacheHits) {
            $res['CacheHits'] = $this->cacheHits;
        }
        if (null !== $this->preciseBlocks) {
            $res['PreciseBlocks'] = $this->preciseBlocks;
        }
        if (null !== $this->regionBlocks) {
            $res['RegionBlocks'] = $this->regionBlocks;
        }
        if (null !== $this->ipBlockQps) {
            $res['IpBlockQps'] = $this->ipBlockQps;
        }
        if (null !== $this->ccJsQps) {
            $res['CcJsQps'] = $this->ccJsQps;
        }
        if (null !== $this->preciseJsQps) {
            $res['PreciseJsQps'] = $this->preciseJsQps;
        }
        if (null !== $this->ccBlockQps) {
            $res['CcBlockQps'] = $this->ccBlockQps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainQpsWithCacheResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Totals'])) {
            if (!empty($map['Totals'])) {
                $model->totals = $map['Totals'];
            }
        }
        if (isset($map['Blocks'])) {
            if (!empty($map['Blocks'])) {
                $model->blocks = $map['Blocks'];
            }
        }
        if (isset($map['CacheHits'])) {
            if (!empty($map['CacheHits'])) {
                $model->cacheHits = $map['CacheHits'];
            }
        }
        if (isset($map['PreciseBlocks'])) {
            if (!empty($map['PreciseBlocks'])) {
                $model->preciseBlocks = $map['PreciseBlocks'];
            }
        }
        if (isset($map['RegionBlocks'])) {
            if (!empty($map['RegionBlocks'])) {
                $model->regionBlocks = $map['RegionBlocks'];
            }
        }
        if (isset($map['IpBlockQps'])) {
            if (!empty($map['IpBlockQps'])) {
                $model->ipBlockQps = $map['IpBlockQps'];
            }
        }
        if (isset($map['CcJsQps'])) {
            if (!empty($map['CcJsQps'])) {
                $model->ccJsQps = $map['CcJsQps'];
            }
        }
        if (isset($map['PreciseJsQps'])) {
            if (!empty($map['PreciseJsQps'])) {
                $model->preciseJsQps = $map['PreciseJsQps'];
            }
        }
        if (isset($map['CcBlockQps'])) {
            if (!empty($map['CcBlockQps'])) {
                $model->ccBlockQps = $map['CcBlockQps'];
            }
        }

        return $model;
    }
}

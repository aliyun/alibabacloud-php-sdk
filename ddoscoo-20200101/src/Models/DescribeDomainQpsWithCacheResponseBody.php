<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainQpsWithCacheResponseBody extends Model
{
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
    public $ccBlockQps;

    /**
     * @var string[]
     */
    public $ccJsQps;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string[]
     */
    public $ipBlockQps;

    /**
     * @var string[]
     */
    public $preciseBlocks;

    /**
     * @var string[]
     */
    public $preciseJsQps;

    /**
     * @var string[]
     */
    public $regionBlocks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $totals;
    protected $_name = [
        'blocks'        => 'Blocks',
        'cacheHits'     => 'CacheHits',
        'ccBlockQps'    => 'CcBlockQps',
        'ccJsQps'       => 'CcJsQps',
        'interval'      => 'Interval',
        'ipBlockQps'    => 'IpBlockQps',
        'preciseBlocks' => 'PreciseBlocks',
        'preciseJsQps'  => 'PreciseJsQps',
        'regionBlocks'  => 'RegionBlocks',
        'requestId'     => 'RequestId',
        'startTime'     => 'StartTime',
        'totals'        => 'Totals',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blocks) {
            $res['Blocks'] = $this->blocks;
        }
        if (null !== $this->cacheHits) {
            $res['CacheHits'] = $this->cacheHits;
        }
        if (null !== $this->ccBlockQps) {
            $res['CcBlockQps'] = $this->ccBlockQps;
        }
        if (null !== $this->ccJsQps) {
            $res['CcJsQps'] = $this->ccJsQps;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ipBlockQps) {
            $res['IpBlockQps'] = $this->ipBlockQps;
        }
        if (null !== $this->preciseBlocks) {
            $res['PreciseBlocks'] = $this->preciseBlocks;
        }
        if (null !== $this->preciseJsQps) {
            $res['PreciseJsQps'] = $this->preciseJsQps;
        }
        if (null !== $this->regionBlocks) {
            $res['RegionBlocks'] = $this->regionBlocks;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totals) {
            $res['Totals'] = $this->totals;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainQpsWithCacheResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['CcBlockQps'])) {
            if (!empty($map['CcBlockQps'])) {
                $model->ccBlockQps = $map['CcBlockQps'];
            }
        }
        if (isset($map['CcJsQps'])) {
            if (!empty($map['CcJsQps'])) {
                $model->ccJsQps = $map['CcJsQps'];
            }
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IpBlockQps'])) {
            if (!empty($map['IpBlockQps'])) {
                $model->ipBlockQps = $map['IpBlockQps'];
            }
        }
        if (isset($map['PreciseBlocks'])) {
            if (!empty($map['PreciseBlocks'])) {
                $model->preciseBlocks = $map['PreciseBlocks'];
            }
        }
        if (isset($map['PreciseJsQps'])) {
            if (!empty($map['PreciseJsQps'])) {
                $model->preciseJsQps = $map['PreciseJsQps'];
            }
        }
        if (isset($map['RegionBlocks'])) {
            if (!empty($map['RegionBlocks'])) {
                $model->regionBlocks = $map['RegionBlocks'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Totals'])) {
            if (!empty($map['Totals'])) {
                $model->totals = $map['Totals'];
            }
        }

        return $model;
    }
}

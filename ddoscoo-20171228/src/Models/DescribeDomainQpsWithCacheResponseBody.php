<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainQpsWithCacheResponseBody extends Model
{
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
    public $blocks;

    /**
     * @var string[]
     */
    public $preciseBlocks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $preciseJsQps;

    /**
     * @var string[]
     */
    public $totals;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $ccBlockQps;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string[]
     */
    public $regionBlocks;

    /**
     * @var string[]
     */
    public $cacheHits;
    protected $_name = [
        'ipBlockQps'    => 'IpBlockQps',
        'ccJsQps'       => 'CcJsQps',
        'blocks'        => 'Blocks',
        'preciseBlocks' => 'PreciseBlocks',
        'requestId'     => 'RequestId',
        'preciseJsQps'  => 'PreciseJsQps',
        'totals'        => 'Totals',
        'startTime'     => 'StartTime',
        'ccBlockQps'    => 'CcBlockQps',
        'interval'      => 'Interval',
        'regionBlocks'  => 'RegionBlocks',
        'cacheHits'     => 'CacheHits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipBlockQps) {
            $res['IpBlockQps'] = $this->ipBlockQps;
        }
        if (null !== $this->ccJsQps) {
            $res['CcJsQps'] = $this->ccJsQps;
        }
        if (null !== $this->blocks) {
            $res['Blocks'] = $this->blocks;
        }
        if (null !== $this->preciseBlocks) {
            $res['PreciseBlocks'] = $this->preciseBlocks;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->preciseJsQps) {
            $res['PreciseJsQps'] = $this->preciseJsQps;
        }
        if (null !== $this->totals) {
            $res['Totals'] = $this->totals;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->ccBlockQps) {
            $res['CcBlockQps'] = $this->ccBlockQps;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->regionBlocks) {
            $res['RegionBlocks'] = $this->regionBlocks;
        }
        if (null !== $this->cacheHits) {
            $res['CacheHits'] = $this->cacheHits;
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
        if (isset($map['Blocks'])) {
            if (!empty($map['Blocks'])) {
                $model->blocks = $map['Blocks'];
            }
        }
        if (isset($map['PreciseBlocks'])) {
            if (!empty($map['PreciseBlocks'])) {
                $model->preciseBlocks = $map['PreciseBlocks'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PreciseJsQps'])) {
            if (!empty($map['PreciseJsQps'])) {
                $model->preciseJsQps = $map['PreciseJsQps'];
            }
        }
        if (isset($map['Totals'])) {
            if (!empty($map['Totals'])) {
                $model->totals = $map['Totals'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['CcBlockQps'])) {
            if (!empty($map['CcBlockQps'])) {
                $model->ccBlockQps = $map['CcBlockQps'];
            }
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['RegionBlocks'])) {
            if (!empty($map['RegionBlocks'])) {
                $model->regionBlocks = $map['RegionBlocks'];
            }
        }
        if (isset($map['CacheHits'])) {
            if (!empty($map['CacheHits'])) {
                $model->cacheHits = $map['CacheHits'];
            }
        }

        return $model;
    }
}

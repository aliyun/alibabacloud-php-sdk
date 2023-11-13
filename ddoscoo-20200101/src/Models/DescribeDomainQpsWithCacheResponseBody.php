<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainQpsWithCacheResponseBody extends Model
{
    /**
     * @description An array that consists of the attack QPS.
     *
     * @var string[]
     */
    public $blocks;

    /**
     * @description An array consisting of cache hit ratios.
     *
     * @var string[]
     */
    public $cacheHits;

    /**
     * @description An array consisting of the QPS that is blocked by the Frequency Control policy.
     *
     * @var string[]
     */
    public $ccBlockQps;

    /**
     * @description An array consisting of the QPS for which the Frequency Control policy triggers Completely Automated Public Turing test to tell Computers and Humans Apart (CAPTCHA).
     *
     * @var string[]
     */
    public $ccJsQps;

    /**
     * @description The intervals between every two adjacent records. Unit: seconds.
     *
     * @example 20384
     *
     * @var int
     */
    public $interval;

    /**
     * @description An array consisting of the QPS that is blocked by the blacklist for domain names.
     *
     * @var string[]
     */
    public $ipBlockQps;

    /**
     * @description An array consisting of the QPS that is blocked by the Accurate Access Control policy.
     *
     * @var string[]
     */
    public $preciseBlocks;

    /**
     * @description An array consisting of the QPS for which the Accurate Access Control policy triggers the JavaScript challenge.
     *
     * @var string[]
     */
    public $preciseJsQps;

    /**
     * @description An array consisting of the QPS that is blocked by the Location Blacklist policy.
     *
     * @var string[]
     */
    public $regionBlocks;

    /**
     * @description The ID of the request.
     *
     * @example 0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1582992000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description An array consisting of the total QPS.
     *
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetTrafficTrendResponseBody\dataList;
use AlibabaCloud\Tea\Model;

class DescribeInternetTrafficTrendResponseBody extends Model
{
    /**
     * @example 6114152
     *
     * @var int
     */
    public $avgInBps;

    /**
     * @example 70148993
     *
     * @var int
     */
    public $avgOutBps;

    /**
     * @example 79013
     *
     * @var int
     */
    public $avgSession;

    /**
     * @example 2306
     *
     * @var int
     */
    public $avgTotalBps;

    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @example 1672736400
     *
     * @var int
     */
    public $maxBandwidthTime;

    /**
     * @example 10275643
     *
     * @var int
     */
    public $maxInBps;

    /**
     * @example 395188
     *
     * @var int
     */
    public $maxOutBps;

    /**
     * @example 931641
     *
     * @var int
     */
    public $maxSession;

    /**
     * @example 89783147
     *
     * @var int
     */
    public $maxTotalBps;

    /**
     * @example C7E837BE-0379-565E-B7B4-DE595C8D337C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 963227674958
     *
     * @var int
     */
    public $totalBytes;

    /**
     * @example 41536824243873
     *
     * @var int
     */
    public $totalInBytes;

    /**
     * @example 2660894567178
     *
     * @var int
     */
    public $totalOutBytes;

    /**
     * @example 1061449
     *
     * @var int
     */
    public $totalSession;
    protected $_name = [
        'avgInBps'         => 'AvgInBps',
        'avgOutBps'        => 'AvgOutBps',
        'avgSession'       => 'AvgSession',
        'avgTotalBps'      => 'AvgTotalBps',
        'dataList'         => 'DataList',
        'maxBandwidthTime' => 'MaxBandwidthTime',
        'maxInBps'         => 'MaxInBps',
        'maxOutBps'        => 'MaxOutBps',
        'maxSession'       => 'MaxSession',
        'maxTotalBps'      => 'MaxTotalBps',
        'requestId'        => 'RequestId',
        'totalBytes'       => 'TotalBytes',
        'totalInBytes'     => 'TotalInBytes',
        'totalOutBytes'    => 'TotalOutBytes',
        'totalSession'     => 'TotalSession',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgInBps) {
            $res['AvgInBps'] = $this->avgInBps;
        }
        if (null !== $this->avgOutBps) {
            $res['AvgOutBps'] = $this->avgOutBps;
        }
        if (null !== $this->avgSession) {
            $res['AvgSession'] = $this->avgSession;
        }
        if (null !== $this->avgTotalBps) {
            $res['AvgTotalBps'] = $this->avgTotalBps;
        }
        if (null !== $this->dataList) {
            $res['DataList'] = [];
            if (null !== $this->dataList && \is_array($this->dataList)) {
                $n = 0;
                foreach ($this->dataList as $item) {
                    $res['DataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxBandwidthTime) {
            $res['MaxBandwidthTime'] = $this->maxBandwidthTime;
        }
        if (null !== $this->maxInBps) {
            $res['MaxInBps'] = $this->maxInBps;
        }
        if (null !== $this->maxOutBps) {
            $res['MaxOutBps'] = $this->maxOutBps;
        }
        if (null !== $this->maxSession) {
            $res['MaxSession'] = $this->maxSession;
        }
        if (null !== $this->maxTotalBps) {
            $res['MaxTotalBps'] = $this->maxTotalBps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }
        if (null !== $this->totalInBytes) {
            $res['TotalInBytes'] = $this->totalInBytes;
        }
        if (null !== $this->totalOutBytes) {
            $res['TotalOutBytes'] = $this->totalOutBytes;
        }
        if (null !== $this->totalSession) {
            $res['TotalSession'] = $this->totalSession;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInternetTrafficTrendResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgInBps'])) {
            $model->avgInBps = $map['AvgInBps'];
        }
        if (isset($map['AvgOutBps'])) {
            $model->avgOutBps = $map['AvgOutBps'];
        }
        if (isset($map['AvgSession'])) {
            $model->avgSession = $map['AvgSession'];
        }
        if (isset($map['AvgTotalBps'])) {
            $model->avgTotalBps = $map['AvgTotalBps'];
        }
        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n               = 0;
                foreach ($map['DataList'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxBandwidthTime'])) {
            $model->maxBandwidthTime = $map['MaxBandwidthTime'];
        }
        if (isset($map['MaxInBps'])) {
            $model->maxInBps = $map['MaxInBps'];
        }
        if (isset($map['MaxOutBps'])) {
            $model->maxOutBps = $map['MaxOutBps'];
        }
        if (isset($map['MaxSession'])) {
            $model->maxSession = $map['MaxSession'];
        }
        if (isset($map['MaxTotalBps'])) {
            $model->maxTotalBps = $map['MaxTotalBps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }
        if (isset($map['TotalInBytes'])) {
            $model->totalInBytes = $map['TotalInBytes'];
        }
        if (isset($map['TotalOutBytes'])) {
            $model->totalOutBytes = $map['TotalOutBytes'];
        }
        if (isset($map['TotalSession'])) {
            $model->totalSession = $map['TotalSession'];
        }

        return $model;
    }
}

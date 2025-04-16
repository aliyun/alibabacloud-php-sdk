<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetTrafficTrendResponseBody\dataList;

class DescribeInternetTrafficTrendResponseBody extends Model
{
    /**
     * @var int
     */
    public $avgInBps;

    /**
     * @var int
     */
    public $avgOutBps;

    /**
     * @var int
     */
    public $avgSession;

    /**
     * @var int
     */
    public $avgTotalBps;

    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var int
     */
    public $maxBandwidthTime;

    /**
     * @var int
     */
    public $maxDayExceedBytes;

    /**
     * @var int
     */
    public $maxInBps;

    /**
     * @var int
     */
    public $maxOutBps;

    /**
     * @var int
     */
    public $maxSession;

    /**
     * @var int
     */
    public $maxTotalBps;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalBytes;

    /**
     * @var int
     */
    public $totalExceedBytes;

    /**
     * @var int
     */
    public $totalInBytes;

    /**
     * @var int
     */
    public $totalOutBytes;

    /**
     * @var int
     */
    public $totalSession;
    protected $_name = [
        'avgInBps' => 'AvgInBps',
        'avgOutBps' => 'AvgOutBps',
        'avgSession' => 'AvgSession',
        'avgTotalBps' => 'AvgTotalBps',
        'dataList' => 'DataList',
        'maxBandwidthTime' => 'MaxBandwidthTime',
        'maxDayExceedBytes' => 'MaxDayExceedBytes',
        'maxInBps' => 'MaxInBps',
        'maxOutBps' => 'MaxOutBps',
        'maxSession' => 'MaxSession',
        'maxTotalBps' => 'MaxTotalBps',
        'requestId' => 'RequestId',
        'totalBytes' => 'TotalBytes',
        'totalExceedBytes' => 'TotalExceedBytes',
        'totalInBytes' => 'TotalInBytes',
        'totalOutBytes' => 'TotalOutBytes',
        'totalSession' => 'TotalSession',
    ];

    public function validate()
    {
        if (\is_array($this->dataList)) {
            Model::validateArray($this->dataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dataList)) {
                $res['DataList'] = [];
                $n1 = 0;
                foreach ($this->dataList as $item1) {
                    $res['DataList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxBandwidthTime) {
            $res['MaxBandwidthTime'] = $this->maxBandwidthTime;
        }

        if (null !== $this->maxDayExceedBytes) {
            $res['MaxDayExceedBytes'] = $this->maxDayExceedBytes;
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

        if (null !== $this->totalExceedBytes) {
            $res['TotalExceedBytes'] = $this->totalExceedBytes;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['DataList'] as $item1) {
                    $model->dataList[$n1++] = dataList::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxBandwidthTime'])) {
            $model->maxBandwidthTime = $map['MaxBandwidthTime'];
        }

        if (isset($map['MaxDayExceedBytes'])) {
            $model->maxDayExceedBytes = $map['MaxDayExceedBytes'];
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

        if (isset($map['TotalExceedBytes'])) {
            $model->totalExceedBytes = $map['TotalExceedBytes'];
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

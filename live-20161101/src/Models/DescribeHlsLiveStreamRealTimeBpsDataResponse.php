<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponse\usageData;
use AlibabaCloud\Tea\Model;

class DescribeHlsLiveStreamRealTimeBpsDataResponse extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var usageData[]
     */
    public $usageData;
    protected $_name = [
        'time'      => 'Time',
        'requestId' => 'RequestId',
        'usageData' => 'UsageData',
    ];

    public function validate()
    {
        Model::validateRequired('time', $this->time, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('usageData', $this->usageData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->usageData) {
            $res['UsageData'] = [];
            if (null !== $this->usageData && \is_array($this->usageData)) {
                $n = 0;
                foreach ($this->usageData as $item) {
                    $res['UsageData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHlsLiveStreamRealTimeBpsDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsageData'])) {
            if (!empty($map['UsageData'])) {
                $model->usageData = [];
                $n                = 0;
                foreach ($map['UsageData'] as $item) {
                    $model->usageData[$n++] = null !== $item ? usageData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

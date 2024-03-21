<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvUsageDataResponseBody\kvUsageData;
use AlibabaCloud\Tea\Model;

class DescribeKvUsageDataResponseBody extends Model
{
    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2022-11-18T15:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The detailed usage data.
     *
     * @var kvUsageData[]
     */
    public $kvUsageData;

    /**
     * @description The request ID.
     *
     * @example 9732E117-8A37-49FD-A36F-ABBB87556CA7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2022-11-06T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'     => 'EndTime',
        'kvUsageData' => 'KvUsageData',
        'requestId'   => 'RequestId',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->kvUsageData) {
            $res['KvUsageData'] = [];
            if (null !== $this->kvUsageData && \is_array($this->kvUsageData)) {
                $n = 0;
                foreach ($this->kvUsageData as $item) {
                    $res['KvUsageData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKvUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['KvUsageData'])) {
            if (!empty($map['KvUsageData'])) {
                $model->kvUsageData = [];
                $n                  = 0;
                foreach ($map['KvUsageData'] as $item) {
                    $model->kvUsageData[$n++] = null !== $item ? kvUsageData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

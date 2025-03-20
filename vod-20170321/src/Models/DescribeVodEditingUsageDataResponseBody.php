<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodEditingUsageDataResponseBody\editingData;
use AlibabaCloud\Tea\Model;

class DescribeVodEditingUsageDataResponseBody extends Model
{
    /**
     * @var editingData[]
     */
    public $editingData;

    /**
     * @example 2024-11-07T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 6CB55B62-6E5F-54D1-80BF-DFA3DE9F0***
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2024-11-06T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'editingData' => 'EditingData',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->editingData) {
            $res['EditingData'] = [];
            if (null !== $this->editingData && \is_array($this->editingData)) {
                $n = 0;
                foreach ($this->editingData as $item) {
                    $res['EditingData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
     * @return DescribeVodEditingUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EditingData'])) {
            if (!empty($map['EditingData'])) {
                $model->editingData = [];
                $n = 0;
                foreach ($map['EditingData'] as $item) {
                    $model->editingData[$n++] = null !== $item ? editingData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodMultiUsageDataResponseBody\multiUsageData;

class DescribeVodMultiUsageDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var multiUsageData
     */
    public $multiUsageData;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'multiUsageData' => 'MultiUsageData',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (null !== $this->multiUsageData) {
            $this->multiUsageData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->multiUsageData) {
            $res['MultiUsageData'] = null !== $this->multiUsageData ? $this->multiUsageData->toArray($noStream) : $this->multiUsageData;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MultiUsageData'])) {
            $model->multiUsageData = multiUsageData::fromMap($map['MultiUsageData']);
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvUsageDataResponseBody\kvUsageData;

class DescribeKvUsageDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var kvUsageData[]
     */
    public $kvUsageData;

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
        'kvUsageData' => 'KvUsageData',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->kvUsageData)) {
            Model::validateArray($this->kvUsageData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->kvUsageData) {
            if (\is_array($this->kvUsageData)) {
                $res['KvUsageData'] = [];
                $n1 = 0;
                foreach ($this->kvUsageData as $item1) {
                    $res['KvUsageData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['KvUsageData'])) {
            if (!empty($map['KvUsageData'])) {
                $model->kvUsageData = [];
                $n1 = 0;
                foreach ($map['KvUsageData'] as $item1) {
                    $model->kvUsageData[$n1] = kvUsageData::fromMap($item1);
                    ++$n1;
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

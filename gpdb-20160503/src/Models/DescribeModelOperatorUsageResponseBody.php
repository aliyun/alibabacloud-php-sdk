<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModelOperatorUsageResponseBody\keys;

class DescribeModelOperatorUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var keys[]
     */
    public $keys;

    /**
     * @var int
     */
    public $period;

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
        'keys' => 'Keys',
        'period' => 'Period',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['Keys'] = [];
                $n1 = 0;
                foreach ($this->keys as $item1) {
                    $res['Keys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
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

        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = [];
                $n1 = 0;
                foreach ($map['Keys'] as $item1) {
                    $model->keys[$n1] = keys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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

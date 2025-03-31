<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePatternPerformanceResponseBody\performances;

class DescribePatternPerformanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessIp;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var performances[]
     */
    public $performances;

    /**
     * @var int
     */
    public $queryCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $SQLPattern;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tables;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'accessIp' => 'AccessIp',
        'endTime' => 'EndTime',
        'failedCount' => 'FailedCount',
        'performances' => 'Performances',
        'queryCount' => 'QueryCount',
        'requestId' => 'RequestId',
        'SQLPattern' => 'SQLPattern',
        'startTime' => 'StartTime',
        'tables' => 'Tables',
        'user' => 'User',
    ];

    public function validate()
    {
        if (\is_array($this->performances)) {
            Model::validateArray($this->performances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessIp) {
            $res['AccessIp'] = $this->accessIp;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->performances) {
            if (\is_array($this->performances)) {
                $res['Performances'] = [];
                $n1 = 0;
                foreach ($this->performances as $item1) {
                    $res['Performances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SQLPattern) {
            $res['SQLPattern'] = $this->SQLPattern;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['AccessIp'])) {
            $model->accessIp = $map['AccessIp'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['Performances'])) {
            if (!empty($map['Performances'])) {
                $model->performances = [];
                $n1 = 0;
                foreach ($map['Performances'] as $item1) {
                    $model->performances[$n1++] = performances::fromMap($item1);
                }
            }
        }

        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SQLPattern'])) {
            $model->SQLPattern = $map['SQLPattern'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

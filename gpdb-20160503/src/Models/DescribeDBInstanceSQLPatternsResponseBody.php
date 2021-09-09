<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSQLPatternsResponseBody\patterns;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSQLPatternsResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var patterns[]
     */
    public $patterns;
    protected $_name = [
        'endTime'     => 'EndTime',
        'requestId'   => 'RequestId',
        'startTime'   => 'StartTime',
        'DBClusterId' => 'DBClusterId',
        'patterns'    => 'Patterns',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->patterns) {
            $res['Patterns'] = [];
            if (null !== $this->patterns && \is_array($this->patterns)) {
                $n = 0;
                foreach ($this->patterns as $item) {
                    $res['Patterns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceSQLPatternsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Patterns'])) {
            if (!empty($map['Patterns'])) {
                $model->patterns = [];
                $n               = 0;
                foreach ($map['Patterns'] as $item) {
                    $model->patterns[$n++] = null !== $item ? patterns::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

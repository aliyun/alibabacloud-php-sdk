<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSQLPatternsResponseBody\patterns;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSQLPatternsResponseBody extends Model
{
    /**
     * @example gp-xxxxxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2021-08-03T09:31Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var patterns[]
     */
    public $patterns;

    /**
     * @example 4BBA1119-65FD-50B4-8A1D-B4**********
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2021-08-03T09:30Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'endTime'     => 'EndTime',
        'patterns'    => 'Patterns',
        'requestId'   => 'RequestId',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
     * @return DescribeDBInstanceSQLPatternsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

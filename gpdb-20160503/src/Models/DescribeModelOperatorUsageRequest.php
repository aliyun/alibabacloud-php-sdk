<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeModelOperatorUsageRequest extends Model
{
    /**
     * @var int[]
     */
    public $apiKeyIds;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string[]
     */
    public $keys;

    /**
     * @var string[]
     */
    public $modelNames;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'apiKeyIds' => 'ApiKeyIds',
        'endTime' => 'EndTime',
        'groupBy' => 'GroupBy',
        'keys' => 'Keys',
        'modelNames' => 'ModelNames',
        'period' => 'Period',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->apiKeyIds)) {
            Model::validateArray($this->apiKeyIds);
        }
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        if (\is_array($this->modelNames)) {
            Model::validateArray($this->modelNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyIds) {
            if (\is_array($this->apiKeyIds)) {
                $res['ApiKeyIds'] = [];
                $n1 = 0;
                foreach ($this->apiKeyIds as $item1) {
                    $res['ApiKeyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }

        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['Keys'] = [];
                $n1 = 0;
                foreach ($this->keys as $item1) {
                    $res['Keys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelNames) {
            if (\is_array($this->modelNames)) {
                $res['ModelNames'] = [];
                $n1 = 0;
                foreach ($this->modelNames as $item1) {
                    $res['ModelNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (isset($map['ApiKeyIds'])) {
            if (!empty($map['ApiKeyIds'])) {
                $model->apiKeyIds = [];
                $n1 = 0;
                foreach ($map['ApiKeyIds'] as $item1) {
                    $model->apiKeyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }

        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = [];
                $n1 = 0;
                foreach ($map['Keys'] as $item1) {
                    $model->keys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ModelNames'])) {
            if (!empty($map['ModelNames'])) {
                $model->modelNames = [];
                $n1 = 0;
                foreach ($map['ModelNames'] as $item1) {
                    $model->modelNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

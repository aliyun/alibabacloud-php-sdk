<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeModelOperatorUsageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiKeyIdsShrink;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string
     */
    public $keysShrink;

    /**
     * @var string
     */
    public $modelNamesShrink;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'apiKeyIdsShrink' => 'ApiKeyIds',
        'endTime' => 'EndTime',
        'groupBy' => 'GroupBy',
        'keysShrink' => 'Keys',
        'modelNamesShrink' => 'ModelNames',
        'period' => 'Period',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyIdsShrink) {
            $res['ApiKeyIds'] = $this->apiKeyIdsShrink;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }

        if (null !== $this->keysShrink) {
            $res['Keys'] = $this->keysShrink;
        }

        if (null !== $this->modelNamesShrink) {
            $res['ModelNames'] = $this->modelNamesShrink;
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
            $model->apiKeyIdsShrink = $map['ApiKeyIds'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }

        if (isset($map['Keys'])) {
            $model->keysShrink = $map['Keys'];
        }

        if (isset($map['ModelNames'])) {
            $model->modelNamesShrink = $map['ModelNames'];
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

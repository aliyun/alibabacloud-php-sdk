<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;

class RunEvaluationRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string[]
     */
    public $metricIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'accountId' => 'AccountId',
        'metricIds' => 'MetricIds',
        'regionId' => 'RegionId',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->metricIds)) {
            Model::validateArray($this->metricIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->metricIds) {
            if (\is_array($this->metricIds)) {
                $res['MetricIds'] = [];
                $n1 = 0;
                foreach ($this->metricIds as $item1) {
                    $res['MetricIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['MetricIds'])) {
            if (!empty($map['MetricIds'])) {
                $model->metricIds = [];
                $n1 = 0;
                foreach ($map['MetricIds'] as $item1) {
                    $model->metricIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateBudgetRequest\cycleQuota;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateBudgetRequest\ecIdAccountIds;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateBudgetRequest\queryFilter;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateBudgetRequest\warnConfs;

class CreateBudgetRequest extends Model
{
    /**
     * @var string
     */
    public $budgetName;

    /**
     * @var string
     */
    public $budgetType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $cycleEndPeriod;

    /**
     * @var cycleQuota[]
     */
    public $cycleQuota;

    /**
     * @var string
     */
    public $cycleStartPeriod;

    /**
     * @var string
     */
    public $cycleType;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var queryFilter[]
     */
    public $queryFilter;

    /**
     * @var string
     */
    public $quota;

    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var warnConfs[]
     */
    public $warnConfs;
    protected $_name = [
        'budgetName' => 'BudgetName',
        'budgetType' => 'BudgetType',
        'comment' => 'Comment',
        'cycleEndPeriod' => 'CycleEndPeriod',
        'cycleQuota' => 'CycleQuota',
        'cycleStartPeriod' => 'CycleStartPeriod',
        'cycleType' => 'CycleType',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'metric' => 'Metric',
        'nbid' => 'Nbid',
        'queryFilter' => 'QueryFilter',
        'quota' => 'Quota',
        'quotaType' => 'QuotaType',
        'warnConfs' => 'WarnConfs',
    ];

    public function validate()
    {
        if (\is_array($this->cycleQuota)) {
            Model::validateArray($this->cycleQuota);
        }
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        if (\is_array($this->queryFilter)) {
            Model::validateArray($this->queryFilter);
        }
        if (\is_array($this->warnConfs)) {
            Model::validateArray($this->warnConfs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->budgetName) {
            $res['BudgetName'] = $this->budgetName;
        }

        if (null !== $this->budgetType) {
            $res['BudgetType'] = $this->budgetType;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->cycleEndPeriod) {
            $res['CycleEndPeriod'] = $this->cycleEndPeriod;
        }

        if (null !== $this->cycleQuota) {
            if (\is_array($this->cycleQuota)) {
                $res['CycleQuota'] = [];
                $n1 = 0;
                foreach ($this->cycleQuota as $item1) {
                    $res['CycleQuota'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cycleStartPeriod) {
            $res['CycleStartPeriod'] = $this->cycleStartPeriod;
        }

        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }

        if (null !== $this->ecIdAccountIds) {
            if (\is_array($this->ecIdAccountIds)) {
                $res['EcIdAccountIds'] = [];
                $n1 = 0;
                foreach ($this->ecIdAccountIds as $item1) {
                    $res['EcIdAccountIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->queryFilter) {
            if (\is_array($this->queryFilter)) {
                $res['QueryFilter'] = [];
                $n1 = 0;
                foreach ($this->queryFilter as $item1) {
                    $res['QueryFilter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }

        if (null !== $this->warnConfs) {
            if (\is_array($this->warnConfs)) {
                $res['WarnConfs'] = [];
                $n1 = 0;
                foreach ($this->warnConfs as $item1) {
                    $res['WarnConfs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BudgetName'])) {
            $model->budgetName = $map['BudgetName'];
        }

        if (isset($map['BudgetType'])) {
            $model->budgetType = $map['BudgetType'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CycleEndPeriod'])) {
            $model->cycleEndPeriod = $map['CycleEndPeriod'];
        }

        if (isset($map['CycleQuota'])) {
            if (!empty($map['CycleQuota'])) {
                $model->cycleQuota = [];
                $n1 = 0;
                foreach ($map['CycleQuota'] as $item1) {
                    $model->cycleQuota[$n1] = cycleQuota::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CycleStartPeriod'])) {
            $model->cycleStartPeriod = $map['CycleStartPeriod'];
        }

        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }

        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n1 = 0;
                foreach ($map['EcIdAccountIds'] as $item1) {
                    $model->ecIdAccountIds[$n1] = ecIdAccountIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['QueryFilter'])) {
            if (!empty($map['QueryFilter'])) {
                $model->queryFilter = [];
                $n1 = 0;
                foreach ($map['QueryFilter'] as $item1) {
                    $model->queryFilter[$n1] = queryFilter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }

        if (isset($map['WarnConfs'])) {
            if (!empty($map['WarnConfs'])) {
                $model->warnConfs = [];
                $n1 = 0;
                foreach ($map['WarnConfs'] as $item1) {
                    $model->warnConfs[$n1] = warnConfs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

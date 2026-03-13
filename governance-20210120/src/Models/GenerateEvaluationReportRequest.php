<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;

class GenerateEvaluationReportRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int[]
     */
    public $accountIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reportType;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountIds' => 'AccountIds',
        'regionId' => 'RegionId',
        'reportType' => 'ReportType',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
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

        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        return $model;
    }
}

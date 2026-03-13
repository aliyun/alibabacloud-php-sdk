<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;

class GenerateEvaluationReportShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountIdsShrink;

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
        'accountIdsShrink' => 'AccountIds',
        'regionId' => 'RegionId',
        'reportType' => 'ReportType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountIdsShrink) {
            $res['AccountIds'] = $this->accountIdsShrink;
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
            $model->accountIdsShrink = $map['AccountIds'];
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

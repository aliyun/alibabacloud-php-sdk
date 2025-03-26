<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeDiagnoseReportsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeDiagnoseReportsResponseBody\reports\details;

class reports extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @var string
     */
    public $diagnoseStatus;

    /**
     * @var string
     */
    public $processStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'details' => 'Details',
        'diagnoseStatus' => 'DiagnoseStatus',
        'processStatus' => 'ProcessStatus',
        'regionId' => 'RegionId',
        'reportId' => 'ReportId',
        'scalingGroupId' => 'ScalingGroupId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1 = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->diagnoseStatus) {
            $res['DiagnoseStatus'] = $this->diagnoseStatus;
        }

        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1 = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1++] = details::fromMap($item1);
                }
            }
        }

        if (isset($map['DiagnoseStatus'])) {
            $model->diagnoseStatus = $map['DiagnoseStatus'];
        }

        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

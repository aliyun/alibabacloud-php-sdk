<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribeDiagnoseReportsRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $reportIds;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'reportIds' => 'ReportIds',
        'scalingGroupId' => 'ScalingGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->reportIds)) {
            Model::validateArray($this->reportIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reportIds) {
            if (\is_array($this->reportIds)) {
                $res['ReportIds'] = [];
                $n1 = 0;
                foreach ($this->reportIds as $item1) {
                    $res['ReportIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReportIds'])) {
            if (!empty($map['ReportIds'])) {
                $model->reportIds = [];
                $n1 = 0;
                foreach ($map['ReportIds'] as $item1) {
                    $model->reportIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}

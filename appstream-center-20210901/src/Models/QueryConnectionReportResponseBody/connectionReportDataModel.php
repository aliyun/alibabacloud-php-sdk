<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryConnectionReportResponseBody;

use AlibabaCloud\Dara\Model;

class connectionReportDataModel extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var float
     */
    public $connectionAvgDurationSeconds;

    /**
     * @var int
     */
    public $connectionFailureCount;

    /**
     * @var int
     */
    public $connectionSuccessCount;

    /**
     * @var float
     */
    public $connectionSuccessRate;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $statEndDate;

    /**
     * @var string
     */
    public $statStartDate;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'connectionAvgDurationSeconds' => 'ConnectionAvgDurationSeconds',
        'connectionFailureCount' => 'ConnectionFailureCount',
        'connectionSuccessCount' => 'ConnectionSuccessCount',
        'connectionSuccessRate' => 'ConnectionSuccessRate',
        'regionId' => 'RegionId',
        'statEndDate' => 'StatEndDate',
        'statStartDate' => 'StatStartDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->connectionAvgDurationSeconds) {
            $res['ConnectionAvgDurationSeconds'] = $this->connectionAvgDurationSeconds;
        }

        if (null !== $this->connectionFailureCount) {
            $res['ConnectionFailureCount'] = $this->connectionFailureCount;
        }

        if (null !== $this->connectionSuccessCount) {
            $res['ConnectionSuccessCount'] = $this->connectionSuccessCount;
        }

        if (null !== $this->connectionSuccessRate) {
            $res['ConnectionSuccessRate'] = $this->connectionSuccessRate;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->statEndDate) {
            $res['StatEndDate'] = $this->statEndDate;
        }

        if (null !== $this->statStartDate) {
            $res['StatStartDate'] = $this->statStartDate;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['ConnectionAvgDurationSeconds'])) {
            $model->connectionAvgDurationSeconds = $map['ConnectionAvgDurationSeconds'];
        }

        if (isset($map['ConnectionFailureCount'])) {
            $model->connectionFailureCount = $map['ConnectionFailureCount'];
        }

        if (isset($map['ConnectionSuccessCount'])) {
            $model->connectionSuccessCount = $map['ConnectionSuccessCount'];
        }

        if (isset($map['ConnectionSuccessRate'])) {
            $model->connectionSuccessRate = $map['ConnectionSuccessRate'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StatEndDate'])) {
            $model->statEndDate = $map['StatEndDate'];
        }

        if (isset($map['StatStartDate'])) {
            $model->statStartDate = $map['StatStartDate'];
        }

        return $model;
    }
}

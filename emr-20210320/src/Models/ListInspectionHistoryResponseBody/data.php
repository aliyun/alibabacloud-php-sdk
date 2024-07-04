<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListInspectionHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 变更消息
     *
     * @var string
     */
    public $changeMessage;

    /**
     * @description 巡检状态
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description 巡检变更明细
     *
     * @example null
     *
     * @var string[][]
     */
    public $inspectionItems;

    /**
     * @var string
     */
    public $reportTime;
    protected $_name = [
        'changeMessage'   => 'ChangeMessage',
        'healthStatus'    => 'HealthStatus',
        'inspectionItems' => 'InspectionItems',
        'reportTime'      => 'ReportTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeMessage) {
            $res['ChangeMessage'] = $this->changeMessage;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->inspectionItems) {
            $res['InspectionItems'] = $this->inspectionItems;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeMessage'])) {
            $model->changeMessage = $map['ChangeMessage'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InspectionItems'])) {
            if (!empty($map['InspectionItems'])) {
                $model->inspectionItems = $map['InspectionItems'];
            }
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }

        return $model;
    }
}

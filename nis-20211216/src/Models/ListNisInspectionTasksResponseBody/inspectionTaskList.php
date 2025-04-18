<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionTasksResponseBody;

use AlibabaCloud\Dara\Model;

class inspectionTaskList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $inspectionName;

    /**
     * @var string
     */
    public $inspectionProject;

    /**
     * @var string
     */
    public $inspectionTaskId;

    /**
     * @var string
     */
    public $lastUpdateReportId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'inspectionName' => 'InspectionName',
        'inspectionProject' => 'InspectionProject',
        'inspectionTaskId' => 'InspectionTaskId',
        'lastUpdateReportId' => 'LastUpdateReportId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->inspectionName) {
            $res['InspectionName'] = $this->inspectionName;
        }

        if (null !== $this->inspectionProject) {
            $res['InspectionProject'] = $this->inspectionProject;
        }

        if (null !== $this->inspectionTaskId) {
            $res['InspectionTaskId'] = $this->inspectionTaskId;
        }

        if (null !== $this->lastUpdateReportId) {
            $res['LastUpdateReportId'] = $this->lastUpdateReportId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InspectionName'])) {
            $model->inspectionName = $map['InspectionName'];
        }

        if (isset($map['InspectionProject'])) {
            $model->inspectionProject = $map['InspectionProject'];
        }

        if (isset($map['InspectionTaskId'])) {
            $model->inspectionTaskId = $map['InspectionTaskId'];
        }

        if (isset($map['LastUpdateReportId'])) {
            $model->lastUpdateReportId = $map['LastUpdateReportId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

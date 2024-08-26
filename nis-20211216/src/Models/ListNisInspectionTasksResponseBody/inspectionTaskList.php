<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionTasksResponseBody;

use AlibabaCloud\Tea\Model;

class inspectionTaskList extends Model
{
    /**
     * @example 2024-06-18 00:14:46
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $inspectionName;

    /**
     * @example basic
     *
     * @var string
     */
    public $inspectionProject;

    /**
     * @example ni-8svm******hzr7fh79
     *
     * @var string
     */
    public $inspectionTaskId;

    /**
     * @example nir-b4c4c9******8a25e
     *
     * @var string
     */
    public $lastUpdateReportId;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'inspectionName'     => 'InspectionName',
        'inspectionProject'  => 'InspectionProject',
        'inspectionTaskId'   => 'InspectionTaskId',
        'lastUpdateReportId' => 'LastUpdateReportId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return inspectionTaskList
     */
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

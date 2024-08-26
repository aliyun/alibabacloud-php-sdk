<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionTaskResponseBody\checkResourceList;
use AlibabaCloud\Tea\Model;

class DescribeNisInspectionTaskResponseBody extends Model
{
    /**
     * @var checkResourceList[]
     */
    public $checkResourceList;

    /**
     * @example 2024-07-01 10:00:57
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $inspectionInterval;

    /**
     * @example Default
     *
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
     * @example ni-8svmpe0yso2bhzr7fh79
     *
     * @var string
     */
    public $inspectionTaskId;

    /**
     * @example 2024-07-01 15:15:57
     *
     * @var string
     */
    public $inspectionTriggerTime;

    /**
     * @example nir-7c3dd178738a429abe6d
     *
     * @var string
     */
    public $lastUpdateReportId;

    /**
     * @example 2024-07-01 10:00:59
     *
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @example A7F0D6EC-E19E-58AC-AC9F-08036763960F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'checkResourceList'     => 'CheckResourceList',
        'createTime'            => 'CreateTime',
        'inspectionInterval'    => 'InspectionInterval',
        'inspectionName'        => 'InspectionName',
        'inspectionProject'     => 'InspectionProject',
        'inspectionTaskId'      => 'InspectionTaskId',
        'inspectionTriggerTime' => 'InspectionTriggerTime',
        'lastUpdateReportId'    => 'LastUpdateReportId',
        'lastUpdateTime'        => 'LastUpdateTime',
        'requestId'             => 'RequestId',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkResourceList) {
            $res['CheckResourceList'] = [];
            if (null !== $this->checkResourceList && \is_array($this->checkResourceList)) {
                $n = 0;
                foreach ($this->checkResourceList as $item) {
                    $res['CheckResourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->inspectionInterval) {
            $res['InspectionInterval'] = $this->inspectionInterval;
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
        if (null !== $this->inspectionTriggerTime) {
            $res['InspectionTriggerTime'] = $this->inspectionTriggerTime;
        }
        if (null !== $this->lastUpdateReportId) {
            $res['LastUpdateReportId'] = $this->lastUpdateReportId;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNisInspectionTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckResourceList'])) {
            if (!empty($map['CheckResourceList'])) {
                $model->checkResourceList = [];
                $n                        = 0;
                foreach ($map['CheckResourceList'] as $item) {
                    $model->checkResourceList[$n++] = null !== $item ? checkResourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InspectionInterval'])) {
            $model->inspectionInterval = $map['InspectionInterval'];
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
        if (isset($map['InspectionTriggerTime'])) {
            $model->inspectionTriggerTime = $map['InspectionTriggerTime'];
        }
        if (isset($map['LastUpdateReportId'])) {
            $model->lastUpdateReportId = $map['LastUpdateReportId'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

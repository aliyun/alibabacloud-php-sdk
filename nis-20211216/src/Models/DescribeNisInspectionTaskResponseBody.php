<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionTaskResponseBody\checkResourceList;

class DescribeNisInspectionTaskResponseBody extends Model
{
    /**
     * @var checkResourceList[]
     */
    public $checkResourceList;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $inspectionInterval;

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
    public $inspectionTriggerTime;

    /**
     * @var string
     */
    public $lastUpdateReportId;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'checkResourceList' => 'CheckResourceList',
        'createTime' => 'CreateTime',
        'inspectionInterval' => 'InspectionInterval',
        'inspectionName' => 'InspectionName',
        'inspectionProject' => 'InspectionProject',
        'inspectionTaskId' => 'InspectionTaskId',
        'inspectionTriggerTime' => 'InspectionTriggerTime',
        'lastUpdateReportId' => 'LastUpdateReportId',
        'lastUpdateTime' => 'LastUpdateTime',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->checkResourceList)) {
            Model::validateArray($this->checkResourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkResourceList) {
            if (\is_array($this->checkResourceList)) {
                $res['CheckResourceList'] = [];
                $n1 = 0;
                foreach ($this->checkResourceList as $item1) {
                    $res['CheckResourceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckResourceList'])) {
            if (!empty($map['CheckResourceList'])) {
                $model->checkResourceList = [];
                $n1 = 0;
                foreach ($map['CheckResourceList'] as $item1) {
                    $model->checkResourceList[$n1++] = checkResourceList::fromMap($item1);
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

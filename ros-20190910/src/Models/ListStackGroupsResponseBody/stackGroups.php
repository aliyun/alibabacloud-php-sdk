<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class stackGroups extends Model
{
    /**
     * @var string
     */
    public $stackGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $stackGroupDriftStatus;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'stackGroupId'          => 'StackGroupId',
        'status'                => 'Status',
        'driftDetectionTime'    => 'DriftDetectionTime',
        'description'           => 'Description',
        'stackGroupDriftStatus' => 'StackGroupDriftStatus',
        'stackGroupName'        => 'StackGroupName',
        'resourceGroupId'       => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->stackGroupDriftStatus) {
            $res['StackGroupDriftStatus'] = $this->stackGroupDriftStatus;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StackGroupDriftStatus'])) {
            $model->stackGroupDriftStatus = $map['StackGroupDriftStatus'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}

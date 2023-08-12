<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListChangeSetsRequest extends Model
{
    /**
     * @description The ID of the change set. If detailed information about the change set is not required, you can use this parameter to replace the GetChangeSet operation.
     *
     * @example 1f6521a4-05af-4975-afe9-bc4b45ad****
     *
     * @var string
     */
    public $changeSetId;

    /**
     * @description The name of change set N. Maximum value of N: 5. You can use an asterisk (\*) as a wildcard for fuzzy search.
     *
     * @example MyChangeSet
     *
     * @var string[]
     */
    public $changeSetName;

    /**
     * @description The execution status of change set N. Maximum value of N: 5. Valid values:
     *
     *   UNAVAILABLE
     *   AVAILABLE
     *   EXECUTE_IN_PROGRESS
     *   EXECUTE_COMPLETE
     *   EXECUTE_FAILED
     *   OBSOLETE
     *
     * @example AVAILABLE
     *
     * @var string[]
     */
    public $executionStatus;

    /**
     * @description The page number.\
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.\
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the change set. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The status of change set N. Maximum value of N: 5. Valid values:
     *
     *   CREATE_PENDING
     *   CREATE_IN_PROGRESS
     *   CREATE_COMPLETE
     *   CREATE_FAILED
     *   DELETE_FAILED
     *   DELETE_COMPLETE
     *
     * @example CREATE_COMPLETE
     *
     * @var string[]
     */
    public $status;
    protected $_name = [
        'changeSetId'     => 'ChangeSetId',
        'changeSetName'   => 'ChangeSetName',
        'executionStatus' => 'ExecutionStatus',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'stackId'         => 'StackId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }
        if (null !== $this->changeSetName) {
            $res['ChangeSetName'] = $this->changeSetName;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangeSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['ChangeSetName'])) {
            if (!empty($map['ChangeSetName'])) {
                $model->changeSetName = $map['ChangeSetName'];
            }
        }
        if (isset($map['ExecutionStatus'])) {
            if (!empty($map['ExecutionStatus'])) {
                $model->executionStatus = $map['ExecutionStatus'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }

        return $model;
    }
}

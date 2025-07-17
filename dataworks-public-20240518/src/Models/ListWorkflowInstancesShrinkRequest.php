<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListWorkflowInstancesShrinkRequest extends Model
{
    /**
     * @description The data timestamp. The value of this parameter is 00:00:00 of the day before the scheduling time of the instance. The value is a UNIX timestamp. Unit: milliseconds. Example: 1743350400000.
     *
     * This parameter is required.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $bizDate;

    /**
     * @description The IDs of the workflow instances. You can query multiple instances at a time by instance ID.
     *
     * @var string
     */
    public $idsShrink;

    /**
     * @description The instance name. Fuzzy match is supported.
     *
     * @example WorkflowInstance1
     *
     * @var string
     */
    public $name;

    /**
     * @description The account ID of the workflow instance owner.
     *
     * @example 1000
     *
     * @var string
     */
    public $owner;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The workspace ID.
     *
     * This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The fields used for sorting. Fields such as TriggerTime and StartedTime are supported. The value of this parameter is in the Sort field + Sort by (Desc/Asc) format. By default, results are sorted in ascending order. Valid values:
     *
     *   TriggerTime (Desc/Asc)
     *   StartedTime (Desc/Asc)
     *   FinishedTime (Desc/Asc)
     *   CreateTime (Desc/Asc)
     *   Id (Desc/Asc)
     *
     * Default value: Id Desc.
     *
     * @example Id Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The type of the workflow instance. Valid values:
     *
     *   Normal
     *   Manual
     *   SmokeTest
     *   SupplementData
     *   ManualWorkflow
     *
     * @example Normal
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the workflow to which the instance belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'bizDate' => 'BizDate',
        'idsShrink' => 'Ids',
        'name' => 'Name',
        'owner' => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'sortBy' => 'SortBy',
        'type' => 'Type',
        'workflowId' => 'WorkflowId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkflowInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}

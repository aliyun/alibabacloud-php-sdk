<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDeploymentsRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account used by the user who created the deployment tasks.
     *
     * @example 20030****
     *
     * @var string
     */
    public $creator;

    /**
     * @description The time when the deployment tasks to be queried were created. This value must be a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1593877765000
     *
     * @var int
     */
    public $endCreateTime;

    /**
     * @description The time when the deployment tasks were run. This value must be a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1593877765000
     *
     * @var int
     */
    public $endExecuteTime;

    /**
     * @description The ID of the Alibaba Cloud account used by the user who runs the deployment tasks.
     *
     * @example 2003****
     *
     * @var string
     */
    public $executor;

    /**
     * @description The keyword that is contained in the names of the deployment tasks. The keyword is used to search for deployment tasks in fuzzy mode.
     *
     * @example hello
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page. Default value: 10. Maximum value: 100.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * You must configure this parameter or the ProjectIdentifier parameter to determine the DataWorks workspace to which the operation is applied.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace name.
     *
     * You must configure this parameter or the ProjectId parameter to determine the DataWorks workspace to which the operation is applied.
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description The status of the deployment tasks. Valid values:
     *
     *   0: The deployment tasks are ready.
     *   1: The deployment tasks are successful.
     *   2: The deployment tasks fail.
     *   6: The deployment tasks are rejected.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'creator'           => 'Creator',
        'endCreateTime'     => 'EndCreateTime',
        'endExecuteTime'    => 'EndExecuteTime',
        'executor'          => 'Executor',
        'keyword'           => 'Keyword',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->endCreateTime) {
            $res['EndCreateTime'] = $this->endCreateTime;
        }
        if (null !== $this->endExecuteTime) {
            $res['EndExecuteTime'] = $this->endExecuteTime;
        }
        if (null !== $this->executor) {
            $res['Executor'] = $this->executor;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
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
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeploymentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['EndCreateTime'])) {
            $model->endCreateTime = $map['EndCreateTime'];
        }
        if (isset($map['EndExecuteTime'])) {
            $model->endExecuteTime = $map['EndExecuteTime'];
        }
        if (isset($map['Executor'])) {
            $model->executor = $map['Executor'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
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
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

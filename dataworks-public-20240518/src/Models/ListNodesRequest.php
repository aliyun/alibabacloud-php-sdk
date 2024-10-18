<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListNodesRequest extends Model
{
    /**
     * @description The container ID. This parameter specifies a filter condition.
     *
     * @example 860438872620113XXXX
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $recurrence;

    /**
     * @description The rerun mode. Valid values:
     *
     *   Allowed: The nodes can be rerun regardless of whether they are successfully run or fail to run.
     *   FailureAllowed: The nodes can be rerun only after they fail to run.
     *   Denied: The nodes cannot be rerun regardless of whether they are successfully run or fail to run.
     *
     * @example Allowed
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description The scene of nodes. This parameter specifies a filter condition.
     *
     * Valid values:
     *
     *   DATAWORKS_PROJECT
     *   MANUAL_WORKFLOW
     *   MANUAL_NODE
     *
     * @example DATAWORKS_PROJECT
     *
     * @var string
     */
    public $scene;
    protected $_name = [
        'containerId' => 'ContainerId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'projectId'   => 'ProjectId',
        'recurrence'  => 'Recurrence',
        'rerunMode'   => 'RerunMode',
        'scene'       => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
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
        if (null !== $this->recurrence) {
            $res['Recurrence'] = $this->recurrence;
        }
        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
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
        if (isset($map['Recurrence'])) {
            $model->recurrence = $map['Recurrence'];
        }
        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}

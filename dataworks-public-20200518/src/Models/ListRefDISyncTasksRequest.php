<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListRefDISyncTasksRequest extends Model
{
    /**
     * @description The name of the data source. You can call the [ListDataSources](~~211431~~) operation to query the name of the data source.
     *
     * @example mysql_datasource
     *
     * @var string
     */
    public $datasourceName;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The condition used to filter sync nodes. Valid values:
     *
     *   from: queries the sync nodes that use the data source as the source data source.
     *   to: queries the sync nodes that use the data source as the destination data source.
     *
     * @example from
     *
     * @var string
     */
    public $refType;

    /**
     * @description The type of the sync node that you want to query. Valid values:
     *
     *   DI_OFFLINE: batch sync node
     *   DI_REALTIME: real-time sync node
     *
     * You can specify only one type. The sync solution type is not supported.
     * @example DI_OFFLINE
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'datasourceName' => 'DatasourceName',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'projectId'      => 'ProjectId',
        'refType'        => 'RefType',
        'taskType'       => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
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
        if (null !== $this->refType) {
            $res['RefType'] = $this->refType;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRefDISyncTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
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
        if (isset($map['RefType'])) {
            $model->refType = $map['RefType'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}

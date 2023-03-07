<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListTasksRequest extends Model
{
    /**
     * @description Specifies whether to display the response history of the asynchronous API operation. Valid values:
     *
     *   true: displays the current response and response history of the asynchronous API operation.
     *   false: displays only the current response of the asynchronous API operation. If no tasks are running, `[]` is returned.
     *
     * >  If you specify the TaskId parameter, the Archived parameter is invalid.
     * @example false
     *
     * @var bool
     */
    public $archived;

    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to obtain the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of the page to return. Pages start from page 1. Valid values: 1 to 999.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 50.
     *
     * Default value: 10
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the task. You can call the following asynchronous API operations to obtain the task ID.
     *
     *   [CreateCluster](~~87100~~)
     *   [StartCluster](~~200345~~)
     *   [StopCluster](~~200346~~)
     *   [DeleteCluster](~~87110~~)
     *   [AddNodes](~~87147~~)
     *   [StartNodes](~~87159~~)
     *   [ResetNodes](~~87158~~)
     *   [StopNodes](~~87160~~)
     *   [DeleteNodes](~~87155~~)
     *
     * @example B745C159-3155-4B94-95D0-4B73D4D2****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'archived'   => 'Archived',
        'clusterId'  => 'ClusterId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archived) {
            $res['Archived'] = $this->archived;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Archived'])) {
            $model->archived = $map['Archived'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

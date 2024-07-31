<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class DISyncTasks extends Model
{
    /**
     * @description The destination of the synchronization task. If the synchronization task has multiple destinations, the return value is a JSON array, such as \\\\"odps_writer\\\\", \\\\"mysql\\\\". If the RefType parameter is set to to, the synchronization tasks that use the specified data source as the destination are returned. In this case, the value of this parameter indicates the specified data source.
     *
     * @example [\\"qcc_polardb2\\"]
     *
     * @var string
     */
    public $diDestinationDatasource;

    /**
     * @description The source of the synchronization task. If the synchronization task has multiple sources, the return value is a JSON array, such as \\\\"odps_writer\\\\", \\\\"mysql\\\\". If the RefType parameter is set to from, the synchronization tasks that use the specified data source as the source are returned. In this case, the value of this parameter indicates the specified data source.
     *
     * @example [\\"odps_writer\\"]
     *
     * @var string
     */
    public $diSourceDatasource;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 100000
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the synchronization task.
     *
     * @example abcd1234
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The type of the synchronization task. Valid values:
     *
     *   DI_OFFLINE: batch synchronization task
     *   DI_REALTIME: real-time synchronization task
     *
     * @example DI_OFFLINE
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'diDestinationDatasource' => 'DiDestinationDatasource',
        'diSourceDatasource'      => 'DiSourceDatasource',
        'nodeId'                  => 'NodeId',
        'nodeName'                => 'NodeName',
        'taskType'                => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diDestinationDatasource) {
            $res['DiDestinationDatasource'] = $this->diDestinationDatasource;
        }
        if (null !== $this->diSourceDatasource) {
            $res['DiSourceDatasource'] = $this->diSourceDatasource;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DISyncTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiDestinationDatasource'])) {
            $model->diDestinationDatasource = $map['DiDestinationDatasource'];
        }
        if (isset($map['DiSourceDatasource'])) {
            $model->diSourceDatasource = $map['DiSourceDatasource'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}

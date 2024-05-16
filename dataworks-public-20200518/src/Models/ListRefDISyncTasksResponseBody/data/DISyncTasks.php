<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class DISyncTasks extends Model
{
    /**
     * @description The destination data source of the sync node.
     *
     * If the RefType parameter is set to to, the sync nodes that use the specified data source as the destination data source are returned. In this case, the value of this parameter indicates the specified data source.
     * @example [\\"qcc_polardb2\\"]
     *
     * @var string
     */
    public $diDestinationDatasource;

    /**
     * @description The source data source of the sync node.
     *
     * If the RefType parameter is set to from, the sync nodes that use the specified data source as the source data source are returned. In this case, the value of this parameter indicates the specified data source.
     * @example [\\"odps_writer\\"]
     *
     * @var string
     */
    public $diSourceDatasource;

    /**
     * @description The ID of the sync node.
     *
     * @example 100000
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the sync node.
     *
     * @example abcd1234
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The type of the sync node. Valid values:
     *
     *   DI_OFFLINE: batch sync node
     *   DI_REALTIME: real-time sync node
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

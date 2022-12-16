<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class DISyncTasks extends Model
{
    /**
     * @example [\"qcc_polardb2\"]
     *
     * @var string
     */
    public $diDestinationDatasource;

    /**
     * @example [\"odps_writer\"]
     *
     * @var string
     */
    public $diSourceDatasource;

    /**
     * @example 100000
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example abcd1234
     *
     * @var string
     */
    public $nodeName;

    /**
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

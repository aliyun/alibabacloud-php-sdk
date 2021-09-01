<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponse\data;

use AlibabaCloud\Tea\Model;

class DISyncTasks extends Model
{
    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $diDestinationDatasource;

    /**
     * @var string
     */
    public $diSourceDatasource;
    protected $_name = [
        'nodeName'                => 'NodeName',
        'nodeId'                  => 'NodeId',
        'taskType'                => 'TaskType',
        'diDestinationDatasource' => 'DiDestinationDatasource',
        'diSourceDatasource'      => 'DiSourceDatasource',
    ];

    public function validate()
    {
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('diDestinationDatasource', $this->diDestinationDatasource, true);
        Model::validateRequired('diSourceDatasource', $this->diSourceDatasource, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->diDestinationDatasource) {
            $res['DiDestinationDatasource'] = $this->diDestinationDatasource;
        }
        if (null !== $this->diSourceDatasource) {
            $res['DiSourceDatasource'] = $this->diSourceDatasource;
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
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['DiDestinationDatasource'])) {
            $model->diDestinationDatasource = $map['DiDestinationDatasource'];
        }
        if (isset($map['DiSourceDatasource'])) {
            $model->diSourceDatasource = $map['DiSourceDatasource'];
        }

        return $model;
    }
}

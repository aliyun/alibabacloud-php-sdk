<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class DISyncTasks extends Model
{
    /**
     * @var string
     */
    public $diSourceDatasource;

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
    public $nodeName;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'diSourceDatasource'      => 'DiSourceDatasource',
        'taskType'                => 'TaskType',
        'diDestinationDatasource' => 'DiDestinationDatasource',
        'nodeName'                => 'NodeName',
        'nodeId'                  => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diSourceDatasource) {
            $res['DiSourceDatasource'] = $this->diSourceDatasource;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->diDestinationDatasource) {
            $res['DiDestinationDatasource'] = $this->diDestinationDatasource;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['DiSourceDatasource'])) {
            $model->diSourceDatasource = $map['DiSourceDatasource'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['DiDestinationDatasource'])) {
            $model->diDestinationDatasource = $map['DiDestinationDatasource'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}

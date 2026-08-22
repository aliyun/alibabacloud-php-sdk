<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteContext0ResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $context0InstanceName;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $dashboardReplicaSetName;

    /**
     * @var string
     */
    public $serviceReplicaSetName;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'context0InstanceName' => 'Context0InstanceName',
        'DBInstanceName' => 'DBInstanceName',
        'dashboardReplicaSetName' => 'DashboardReplicaSetName',
        'serviceReplicaSetName' => 'ServiceReplicaSetName',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context0InstanceName) {
            $res['Context0InstanceName'] = $this->context0InstanceName;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->dashboardReplicaSetName) {
            $res['DashboardReplicaSetName'] = $this->dashboardReplicaSetName;
        }

        if (null !== $this->serviceReplicaSetName) {
            $res['ServiceReplicaSetName'] = $this->serviceReplicaSetName;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context0InstanceName'])) {
            $model->context0InstanceName = $map['Context0InstanceName'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DashboardReplicaSetName'])) {
            $model->dashboardReplicaSetName = $map['DashboardReplicaSetName'];
        }

        if (isset($map['ServiceReplicaSetName'])) {
            $model->serviceReplicaSetName = $map['ServiceReplicaSetName'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

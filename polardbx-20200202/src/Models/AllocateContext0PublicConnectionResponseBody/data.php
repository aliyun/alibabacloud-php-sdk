<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\AllocateContext0PublicConnectionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $context0InstanceName;

    /**
     * @var int
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var int
     */
    public $DBInstanceNetType;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $vip;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'context0InstanceName' => 'Context0InstanceName',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceName' => 'DBInstanceName',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'nodeType' => 'NodeType',
        'port' => 'Port',
        'taskId' => 'TaskId',
        'vip' => 'Vip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->context0InstanceName) {
            $res['Context0InstanceName'] = $this->context0InstanceName;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
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
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['Context0InstanceName'])) {
            $model->context0InstanceName = $map['Context0InstanceName'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }

        return $model;
    }
}

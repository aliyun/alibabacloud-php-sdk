<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\ReleaseContext0PublicConnectionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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
    public $netType;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $oldConnectionString;

    /**
     * @var string
     */
    public $oldPort;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'context0InstanceName' => 'Context0InstanceName',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceName' => 'DBInstanceName',
        'netType' => 'NetType',
        'nodeType' => 'NodeType',
        'oldConnectionString' => 'OldConnectionString',
        'oldPort' => 'OldPort',
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

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->oldConnectionString) {
            $res['OldConnectionString'] = $this->oldConnectionString;
        }

        if (null !== $this->oldPort) {
            $res['OldPort'] = $this->oldPort;
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

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['OldConnectionString'])) {
            $model->oldConnectionString = $map['OldConnectionString'];
        }

        if (isset($map['OldPort'])) {
            $model->oldPort = $map['OldPort'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

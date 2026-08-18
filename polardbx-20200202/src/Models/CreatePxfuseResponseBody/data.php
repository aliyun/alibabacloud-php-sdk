<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\CreatePxfuseResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $alreadyExists;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $pxfuseInstanceName;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'alreadyExists' => 'AlreadyExists',
        'DBInstanceName' => 'DBInstanceName',
        'pxfuseInstanceName' => 'PxfuseInstanceName',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alreadyExists) {
            $res['AlreadyExists'] = $this->alreadyExists;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->pxfuseInstanceName) {
            $res['PxfuseInstanceName'] = $this->pxfuseInstanceName;
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
        if (isset($map['AlreadyExists'])) {
            $model->alreadyExists = $map['AlreadyExists'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['PxfuseInstanceName'])) {
            $model->pxfuseInstanceName = $map['PxfuseInstanceName'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

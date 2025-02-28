<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class CopyDatabaseResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBName;
    /**
     * @var string
     */
    public $DBStatus;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'DBName'    => 'DBName',
        'DBStatus'  => 'DBStatus',
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->DBStatus) {
            $res['DBStatus'] = $this->DBStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['DBStatus'])) {
            $model->DBStatus = $map['DBStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CopyDatabaseResponseBody extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $DBStatus;
    protected $_name = [
        'taskId'   => 'TaskId',
        'DBName'   => 'DBName',
        'DBStatus' => 'DBStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->DBStatus) {
            $res['DBStatus'] = $this->DBStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyDatabaseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DBStatus'])) {
            $model->DBStatus = $map['DBStatus'];
        }

        return $model;
    }
}

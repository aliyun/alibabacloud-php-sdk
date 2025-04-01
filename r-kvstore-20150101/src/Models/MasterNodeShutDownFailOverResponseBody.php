<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class MasterNodeShutDownFailOverResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskID;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'requestId' => 'RequestId',
        'taskID' => 'TaskID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskID) {
            $res['TaskID'] = $this->taskID;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskID'])) {
            $model->taskID = $map['TaskID'];
        }

        return $model;
    }
}

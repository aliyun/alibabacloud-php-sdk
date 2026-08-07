<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class RunCrawlerResponseBody extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $runAccepted;

    /**
     * @var string
     */
    public $runStatus;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $taskInstanceId;
    protected $_name = [
        'id' => 'Id',
        'requestId' => 'RequestId',
        'runAccepted' => 'RunAccepted',
        'runStatus' => 'RunStatus',
        'success' => 'Success',
        'taskInstanceId' => 'TaskInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->runAccepted) {
            $res['RunAccepted'] = $this->runAccepted;
        }

        if (null !== $this->runStatus) {
            $res['RunStatus'] = $this->runStatus;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RunAccepted'])) {
            $model->runAccepted = $map['RunAccepted'];
        }

        if (isset($map['RunStatus'])) {
            $model->runStatus = $map['RunStatus'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }

        return $model;
    }
}

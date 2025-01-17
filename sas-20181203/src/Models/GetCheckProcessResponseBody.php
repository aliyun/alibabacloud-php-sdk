<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetCheckProcessResponseBody extends Model
{
    /**
     * @var int
     */
    public $finishCount;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $statusCode;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'finishCount' => 'FinishCount',
        'requestId'   => 'RequestId',
        'statusCode'  => 'StatusCode',
        'taskId'      => 'TaskId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

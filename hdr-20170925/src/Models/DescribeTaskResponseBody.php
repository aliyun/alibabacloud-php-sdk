<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class DescribeTaskResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example -
     *
     * @var string
     */
    public $content;

    /**
     * @example 1646100927
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example hdr.task.name.TestFailoverTask
     *
     * @var string
     */
    public $name;

    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @example 8F8A2274-F2A5-5782-89A0-7FA442BFA16B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example hdr.task.TestFailoverTask.waitStartFailover
     *
     * @var string
     */
    public $statusCode;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example t-000bzkmmlwh57miq4mwh
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 1636452195
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'code'        => 'Code',
        'content'     => 'Content',
        'createdTime' => 'CreatedTime',
        'message'     => 'Message',
        'name'        => 'Name',
        'progress'    => 'Progress',
        'requestId'   => 'RequestId',
        'statusCode'  => 'StatusCode',
        'success'     => 'Success',
        'taskId'      => 'TaskId',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}

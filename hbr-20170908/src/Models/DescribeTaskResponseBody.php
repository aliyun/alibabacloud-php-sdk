<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DescribeTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var int
     */
    public $completedTime;
    /**
     * @var int
     */
    public $createdTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $progress;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $result;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'code'          => 'Code',
        'completedTime' => 'CompletedTime',
        'createdTime'   => 'CreatedTime',
        'description'   => 'Description',
        'message'       => 'Message',
        'name'          => 'Name',
        'progress'      => 'Progress',
        'requestId'     => 'RequestId',
        'result'        => 'Result',
        'success'       => 'Success',
        'updatedTime'   => 'UpdatedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->completedTime) {
            $res['CompletedTime'] = $this->completedTime;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CompletedTime'])) {
            $model->completedTime = $map['CompletedTime'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}

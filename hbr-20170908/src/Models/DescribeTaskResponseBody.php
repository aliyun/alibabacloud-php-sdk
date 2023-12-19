<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DescribeTaskResponseBody extends Model
{
    /**
     * @description HttpCode
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the job was completed. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1615607706
     *
     * @var int
     */
    public $completedTime;

    /**
     * @description The time when the job was created. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1615607706
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The status of the job. Valid values:
     *
     *   **created**: The job is created.
     *   **expired**: The job expires.
     *   **completed**: The job is completed.
     *   **cancelled**: The job is canceled.
     *
     * @example completed
     *
     * @var string
     */
    public $description;

    /**
     * @description The message that is returned. If the call is successful, "successful" is returned. If the call fails, an error message is returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the job.
     *
     * @example InstallBackupClientsTask
     *
     * @var string
     */
    public $name;

    /**
     * @description The progress of the job. Valid values: 0 to 100. Unit: percentage (%). If the job fails, the value -1 is returned.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of the job.
     *
     * @example {}
     *
     * @var string
     */
    public $result;

    /**
     * @description Indicates whether the call is successful.
     *
     *   true: The call is successful.
     *   false: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The time when the job was updated. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1615607706
     *
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
    }

    public function toMap()
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

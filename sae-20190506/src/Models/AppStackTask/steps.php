<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\AppStackTask;

use AlibabaCloud\Tea\Model;

class steps extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 0
     *
     * @var int
     */
    public $duration;

    /**
     * @example 1706518652
     *
     * @var int
     */
    public $endTime;

    /**
     * @example VPC_CREATE_NETWORK
     *
     * @var string
     */
    public $id;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example 初始化 VPC 网络
     *
     * @var string
     */
    public $name;

    /**
     * @example 1706518652
     *
     * @var int
     */
    public $startTime;

    /**
     * @example WAIT
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'      => 'Code',
        'duration'  => 'Duration',
        'endTime'   => 'EndTime',
        'id'        => 'Id',
        'message'   => 'Message',
        'name'      => 'Name',
        'startTime' => 'StartTime',
        'status'    => 'Status',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return steps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetAsyncTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $asyncTaskId;

    /**
     * @var int
     */
    public $consumedProcess;

    /**
     * @var int
     */
    public $errCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalProcess;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'asyncTaskId'     => 'async_task_id',
        'consumedProcess' => 'consumed_process',
        'errCode'         => 'err_code',
        'message'         => 'message',
        'status'          => 'status',
        'totalProcess'    => 'total_process',
        'url'             => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['async_task_id'] = $this->asyncTaskId;
        }
        if (null !== $this->consumedProcess) {
            $res['consumed_process'] = $this->consumedProcess;
        }
        if (null !== $this->errCode) {
            $res['err_code'] = $this->errCode;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->totalProcess) {
            $res['total_process'] = $this->totalProcess;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['async_task_id'])) {
            $model->asyncTaskId = $map['async_task_id'];
        }
        if (isset($map['consumed_process'])) {
            $model->consumedProcess = $map['consumed_process'];
        }
        if (isset($map['err_code'])) {
            $model->errCode = $map['err_code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['total_process'])) {
            $model->totalProcess = $map['total_process'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

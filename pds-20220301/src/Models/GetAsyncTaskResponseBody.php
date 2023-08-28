<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetAsyncTaskResponseBody extends Model
{
    /**
     * @example 000e89fb-cf8f-11e9-8ab4-b6e980803a3b
     *
     * @var string
     */
    public $asyncTaskId;

    /**
     * @var string
     */
    public $category;

    /**
     * @example 100
     *
     * @var int
     */
    public $consumedProcess;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @example InternalError
     *
     * @var int
     */
    public $errCode;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @example The request has been failed due to some unknown error. Please try again later.
     *
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $state;

    /**
     * @example Succeed
     *
     * @var string
     */
    public $status;

    /**
     * @example 1000
     *
     * @var int
     */
    public $totalProcess;

    /**
     * @var UncompressedFileInfo[]
     */
    public $uncompressFileList;

    /**
     * @example https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'asyncTaskId'        => 'async_task_id',
        'category'           => 'category',
        'consumedProcess'    => 'consumed_process',
        'createdAt'          => 'created_at',
        'errCode'            => 'err_code',
        'errorCode'          => 'error_code',
        'errorMessage'       => 'error_message',
        'finishedAt'         => 'finished_at',
        'message'            => 'message',
        'startedAt'          => 'started_at',
        'state'              => 'state',
        'status'             => 'status',
        'totalProcess'       => 'total_process',
        'uncompressFileList' => 'uncompress_file_list',
        'url'                => 'url',
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
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->consumedProcess) {
            $res['consumed_process'] = $this->consumedProcess;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->errCode) {
            $res['err_code'] = $this->errCode;
        }
        if (null !== $this->errorCode) {
            $res['error_code'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['error_message'] = $this->errorMessage;
        }
        if (null !== $this->finishedAt) {
            $res['finished_at'] = $this->finishedAt;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->startedAt) {
            $res['started_at'] = $this->startedAt;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->totalProcess) {
            $res['total_process'] = $this->totalProcess;
        }
        if (null !== $this->uncompressFileList) {
            $res['uncompress_file_list'] = [];
            if (null !== $this->uncompressFileList && \is_array($this->uncompressFileList)) {
                $n = 0;
                foreach ($this->uncompressFileList as $item) {
                    $res['uncompress_file_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['consumed_process'])) {
            $model->consumedProcess = $map['consumed_process'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['err_code'])) {
            $model->errCode = $map['err_code'];
        }
        if (isset($map['error_code'])) {
            $model->errorCode = $map['error_code'];
        }
        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }
        if (isset($map['finished_at'])) {
            $model->finishedAt = $map['finished_at'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['started_at'])) {
            $model->startedAt = $map['started_at'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['total_process'])) {
            $model->totalProcess = $map['total_process'];
        }
        if (isset($map['uncompress_file_list'])) {
            if (!empty($map['uncompress_file_list'])) {
                $model->uncompressFileList = [];
                $n                         = 0;
                foreach ($map['uncompress_file_list'] as $item) {
                    $model->uncompressFileList[$n++] = null !== $item ? UncompressedFileInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

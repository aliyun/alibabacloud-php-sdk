<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetAsyncTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $asyncTaskId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $consumedProcess;

    /**
     * @var string
     */
    public $createdAt;

    /**
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
     * @var int
     */
    public $failedProcess;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $skippedProcess;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalProcess;

    /**
     * @var UncompressedFileInfo[]
     */
    public $uncompressFileList;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'asyncTaskId' => 'async_task_id',
        'category' => 'category',
        'consumedProcess' => 'consumed_process',
        'createdAt' => 'created_at',
        'errCode' => 'err_code',
        'errorCode' => 'error_code',
        'errorMessage' => 'error_message',
        'failedProcess' => 'failed_process',
        'finishedAt' => 'finished_at',
        'message' => 'message',
        'skippedProcess' => 'skipped_process',
        'startedAt' => 'started_at',
        'state' => 'state',
        'status' => 'status',
        'totalProcess' => 'total_process',
        'uncompressFileList' => 'uncompress_file_list',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->uncompressFileList)) {
            Model::validateArray($this->uncompressFileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->failedProcess) {
            $res['failed_process'] = $this->failedProcess;
        }

        if (null !== $this->finishedAt) {
            $res['finished_at'] = $this->finishedAt;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->skippedProcess) {
            $res['skipped_process'] = $this->skippedProcess;
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
            if (\is_array($this->uncompressFileList)) {
                $res['uncompress_file_list'] = [];
                $n1 = 0;
                foreach ($this->uncompressFileList as $item1) {
                    $res['uncompress_file_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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

        if (isset($map['failed_process'])) {
            $model->failedProcess = $map['failed_process'];
        }

        if (isset($map['finished_at'])) {
            $model->finishedAt = $map['finished_at'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['skipped_process'])) {
            $model->skippedProcess = $map['skipped_process'];
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
                $n1 = 0;
                foreach ($map['uncompress_file_list'] as $item1) {
                    $model->uncompressFileList[$n1++] = UncompressedFileInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

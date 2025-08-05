<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody\chunkResult;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody\job;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody\usage;

class GetUploadDocumentJobResponseBody extends Model
{
    /**
     * @var chunkResult
     */
    public $chunkResult;

    /**
     * @var job
     */
    public $job;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'chunkResult' => 'ChunkResult',
        'job' => 'Job',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        if (null !== $this->chunkResult) {
            $this->chunkResult->validate();
        }
        if (null !== $this->job) {
            $this->job->validate();
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkResult) {
            $res['ChunkResult'] = null !== $this->chunkResult ? $this->chunkResult->toArray($noStream) : $this->chunkResult;
        }

        if (null !== $this->job) {
            $res['Job'] = null !== $this->job ? $this->job->toArray($noStream) : $this->job;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['ChunkResult'])) {
            $model->chunkResult = chunkResult::fromMap($map['ChunkResult']);
        }

        if (isset($map['Job'])) {
            $model->job = job::fromMap($map['Job']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        return $model;
    }
}

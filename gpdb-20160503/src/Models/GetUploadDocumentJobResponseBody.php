<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody\chunkResult;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody\job;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody\usage;
use AlibabaCloud\Tea\Model;

class GetUploadDocumentJobResponseBody extends Model
{
    /**
     * @description The chunking result.
     *
     * @var chunkResult
     */
    public $chunkResult;

    /**
     * @description The information about the document upload job.
     *
     * @var job
     */
    public $job;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the operation. Valid values:
     *
     *   **success**
     *   **fail**
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of tokens that are used for document understanding or embedding.
     *
     * @var usage
     */
    public $usage;
    protected $_name = [
        'chunkResult' => 'ChunkResult',
        'job'         => 'Job',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
        'usage'       => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkResult) {
            $res['ChunkResult'] = null !== $this->chunkResult ? $this->chunkResult->toMap() : null;
        }
        if (null !== $this->job) {
            $res['Job'] = null !== $this->job ? $this->job->toMap() : null;
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
            $res['Usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUploadDocumentJobResponseBody
     */
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

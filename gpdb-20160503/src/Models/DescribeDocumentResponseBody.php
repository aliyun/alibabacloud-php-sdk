<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeDocumentResponseBody extends Model
{
    /**
     * @var string
     */
    public $chunkFileUrl;

    /**
     * @var int
     */
    public $docsCount;

    /**
     * @var string
     */
    public $documentLoader;

    /**
     * @var string
     */
    public $documentLoaderResultFileUrl;

    /**
     * @var string
     */
    public $fileExt;

    /**
     * @var string
     */
    public $fileMd5;

    /**
     * @var string
     */
    public $fileMtime;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var int
     */
    public $fileVersion;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $plainChunkFileUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $textSplitter;
    protected $_name = [
        'chunkFileUrl' => 'ChunkFileUrl',
        'docsCount' => 'DocsCount',
        'documentLoader' => 'DocumentLoader',
        'documentLoaderResultFileUrl' => 'DocumentLoaderResultFileUrl',
        'fileExt' => 'FileExt',
        'fileMd5' => 'FileMd5',
        'fileMtime' => 'FileMtime',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'fileUrl' => 'FileUrl',
        'fileVersion' => 'FileVersion',
        'message' => 'Message',
        'plainChunkFileUrl' => 'PlainChunkFileUrl',
        'requestId' => 'RequestId',
        'source' => 'Source',
        'status' => 'Status',
        'textSplitter' => 'TextSplitter',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkFileUrl) {
            $res['ChunkFileUrl'] = $this->chunkFileUrl;
        }

        if (null !== $this->docsCount) {
            $res['DocsCount'] = $this->docsCount;
        }

        if (null !== $this->documentLoader) {
            $res['DocumentLoader'] = $this->documentLoader;
        }

        if (null !== $this->documentLoaderResultFileUrl) {
            $res['DocumentLoaderResultFileUrl'] = $this->documentLoaderResultFileUrl;
        }

        if (null !== $this->fileExt) {
            $res['FileExt'] = $this->fileExt;
        }

        if (null !== $this->fileMd5) {
            $res['FileMd5'] = $this->fileMd5;
        }

        if (null !== $this->fileMtime) {
            $res['FileMtime'] = $this->fileMtime;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->fileVersion) {
            $res['FileVersion'] = $this->fileVersion;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->plainChunkFileUrl) {
            $res['PlainChunkFileUrl'] = $this->plainChunkFileUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->textSplitter) {
            $res['TextSplitter'] = $this->textSplitter;
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
        if (isset($map['ChunkFileUrl'])) {
            $model->chunkFileUrl = $map['ChunkFileUrl'];
        }

        if (isset($map['DocsCount'])) {
            $model->docsCount = $map['DocsCount'];
        }

        if (isset($map['DocumentLoader'])) {
            $model->documentLoader = $map['DocumentLoader'];
        }

        if (isset($map['DocumentLoaderResultFileUrl'])) {
            $model->documentLoaderResultFileUrl = $map['DocumentLoaderResultFileUrl'];
        }

        if (isset($map['FileExt'])) {
            $model->fileExt = $map['FileExt'];
        }

        if (isset($map['FileMd5'])) {
            $model->fileMd5 = $map['FileMd5'];
        }

        if (isset($map['FileMtime'])) {
            $model->fileMtime = $map['FileMtime'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['FileVersion'])) {
            $model->fileVersion = $map['FileVersion'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PlainChunkFileUrl'])) {
            $model->plainChunkFileUrl = $map['PlainChunkFileUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TextSplitter'])) {
            $model->textSplitter = $map['TextSplitter'];
        }

        return $model;
    }
}

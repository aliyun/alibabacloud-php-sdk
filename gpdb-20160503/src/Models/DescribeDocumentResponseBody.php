<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDocumentResponseBody extends Model
{
    /**
     * @description URL of the split file, valid for 2 hours. The file format is JSONL, with each line formatted as `{"page_content":"*****", "metadata": {"**":"***","**":"***"}`.
     *
     * @example http://oss.xxx/music_chunk.jsonl
     *
     * @var string
     */
    public $chunkFileUrl;

    /**
     * @description Number of documents after splitting.
     *
     * @example 100
     *
     * @var int
     */
    public $docsCount;

    /**
     * @description Name of the document loader.
     *
     * @example RapidOCRPDFLoader
     *
     * @var string
     */
    public $documentLoader;

    /**
     * @description File extension.
     *
     * @example txt
     *
     * @var string
     */
    public $fileExt;

    /**
     * @description MD5 value of the file.
     *
     * @example b8078c9591413550f8963e37e24abcea
     *
     * @var string
     */
    public $fileMd5;

    /**
     * @description The last modified time of the document.
     *
     * @example 2023-11-01 10:01:01.123456
     *
     * @var string
     */
    public $fileMtime;

    /**
     * @description File name.
     *
     * @example music.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @description File size, in bytes.
     *
     * @example 10000
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description Download URL of the document, valid for 2 hours.
     *
     * @example http://oss.xxx/music.txt
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description Document version. This value increments by 1 each time the same document is updated and uploaded.
     *
     * @example 1
     *
     * @var int
     */
    public $fileVersion;

    /**
     * @description Detailed information returned by the API.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Download URL for the plain text (without metadata) after splitting, each line is a chunk, valid for 2 hours.
     *
     * @example http://oss.xxx/music_plain_chunk.txt
     *
     * @var string
     */
    public $plainChunkFileUrl;

    /**
     * @description Request ID.
     *
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Source of the document.
     *
     * @example OSS
     *
     * @var string
     */
    public $source;

    /**
     * @description API execution status, with values as follows:
     * - **success**: Execution succeeded.
     * - **fail**: Execution failed.
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description Name of the text splitter.
     *
     * @example ChineseRecursiveTextSplitter
     *
     * @var string
     */
    public $textSplitter;
    protected $_name = [
        'chunkFileUrl'      => 'ChunkFileUrl',
        'docsCount'         => 'DocsCount',
        'documentLoader'    => 'DocumentLoader',
        'fileExt'           => 'FileExt',
        'fileMd5'           => 'FileMd5',
        'fileMtime'         => 'FileMtime',
        'fileName'          => 'FileName',
        'fileSize'          => 'FileSize',
        'fileUrl'           => 'FileUrl',
        'fileVersion'       => 'FileVersion',
        'message'           => 'Message',
        'plainChunkFileUrl' => 'PlainChunkFileUrl',
        'requestId'         => 'RequestId',
        'source'            => 'Source',
        'status'            => 'Status',
        'textSplitter'      => 'TextSplitter',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeDocumentResponseBody
     */
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

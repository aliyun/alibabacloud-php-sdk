<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndexFileDetailsResponseBody\data;

use AlibabaCloud\Tea\Model;

class documents extends Model
{
    /**
     * @var string
     */
    public $chunkMode;

    /**
     * @var string
     */
    public $chunkSize;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $documentType;

    /**
     * @var string
     */
    public $enableHeaders;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $overlapSize;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $separator;
    protected $_name = [
        'chunkMode' => 'ChunkMode',
        'chunkSize' => 'ChunkSize',
        'code' => 'Code',
        'documentType' => 'DocumentType',
        'enableHeaders' => 'EnableHeaders',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'message' => 'Message',
        'name' => 'Name',
        'overlapSize' => 'OverlapSize',
        'size' => 'Size',
        'sourceId' => 'SourceId',
        'status' => 'Status',
        'separator' => 'separator',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkMode) {
            $res['ChunkMode'] = $this->chunkMode;
        }
        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->documentType) {
            $res['DocumentType'] = $this->documentType;
        }
        if (null !== $this->enableHeaders) {
            $res['EnableHeaders'] = $this->enableHeaders;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (null !== $this->overlapSize) {
            $res['OverlapSize'] = $this->overlapSize;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->separator) {
            $res['separator'] = $this->separator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChunkMode'])) {
            $model->chunkMode = $map['ChunkMode'];
        }
        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DocumentType'])) {
            $model->documentType = $map['DocumentType'];
        }
        if (isset($map['EnableHeaders'])) {
            $model->enableHeaders = $map['EnableHeaders'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
        if (isset($map['OverlapSize'])) {
            $model->overlapSize = $map['OverlapSize'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['separator'])) {
            $model->separator = $map['separator'];
        }

        return $model;
    }
}

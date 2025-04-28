<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class DatasetFileMeta extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $datasetFileMetaId;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fileCreateTime;

    /**
     * @var string
     */
    public $fileFingerPrint;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $fileUpdateTime;

    /**
     * @var string
     */
    public $metaAttributes;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $semanticIndexJobId;

    /**
     * @var string
     */
    public $semanticIndexUpdateTime;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $thumbnailUrl;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'contentType' => 'ContentType',
        'dataSize' => 'DataSize',
        'datasetFileMetaId' => 'DatasetFileMetaId',
        'downloadUrl' => 'DownloadUrl',
        'fileCreateTime' => 'FileCreateTime',
        'fileFingerPrint' => 'FileFingerPrint',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'fileUpdateTime' => 'FileUpdateTime',
        'metaAttributes' => 'MetaAttributes',
        'score' => 'Score',
        'semanticIndexJobId' => 'SemanticIndexJobId',
        'semanticIndexUpdateTime' => 'SemanticIndexUpdateTime',
        'tags' => 'Tags',
        'thumbnailUrl' => 'ThumbnailUrl',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->datasetFileMetaId) {
            $res['DatasetFileMetaId'] = $this->datasetFileMetaId;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->fileCreateTime) {
            $res['FileCreateTime'] = $this->fileCreateTime;
        }

        if (null !== $this->fileFingerPrint) {
            $res['FileFingerPrint'] = $this->fileFingerPrint;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->fileUpdateTime) {
            $res['FileUpdateTime'] = $this->fileUpdateTime;
        }

        if (null !== $this->metaAttributes) {
            $res['MetaAttributes'] = $this->metaAttributes;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->semanticIndexJobId) {
            $res['SemanticIndexJobId'] = $this->semanticIndexJobId;
        }

        if (null !== $this->semanticIndexUpdateTime) {
            $res['SemanticIndexUpdateTime'] = $this->semanticIndexUpdateTime;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->thumbnailUrl) {
            $res['ThumbnailUrl'] = $this->thumbnailUrl;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['DatasetFileMetaId'])) {
            $model->datasetFileMetaId = $map['DatasetFileMetaId'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['FileCreateTime'])) {
            $model->fileCreateTime = $map['FileCreateTime'];
        }

        if (isset($map['FileFingerPrint'])) {
            $model->fileFingerPrint = $map['FileFingerPrint'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['FileUpdateTime'])) {
            $model->fileUpdateTime = $map['FileUpdateTime'];
        }

        if (isset($map['MetaAttributes'])) {
            $model->metaAttributes = $map['MetaAttributes'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['SemanticIndexJobId'])) {
            $model->semanticIndexJobId = $map['SemanticIndexJobId'];
        }

        if (isset($map['SemanticIndexUpdateTime'])) {
            $model->semanticIndexUpdateTime = $map['SemanticIndexUpdateTime'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['ThumbnailUrl'])) {
            $model->thumbnailUrl = $map['ThumbnailUrl'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}

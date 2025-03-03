<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class DatasetFileMeta extends Model
{
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
    public $fileFingerPrint;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var string
     */
    public $fileUpdateTime;
    /**
     * @var float
     */
    public $score;
    /**
     * @var string
     */
    public $tags;
    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'dataSize'          => 'DataSize',
        'datasetFileMetaId' => 'DatasetFileMetaId',
        'downloadUrl'       => 'DownloadUrl',
        'fileFingerPrint'   => 'FileFingerPrint',
        'fileName'          => 'FileName',
        'fileUpdateTime'    => 'FileUpdateTime',
        'score'             => 'Score',
        'tags'              => 'Tags',
        'uri'               => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->datasetFileMetaId) {
            $res['DatasetFileMetaId'] = $this->datasetFileMetaId;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->fileFingerPrint) {
            $res['FileFingerPrint'] = $this->fileFingerPrint;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileUpdateTime) {
            $res['FileUpdateTime'] = $this->fileUpdateTime;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['DatasetFileMetaId'])) {
            $model->datasetFileMetaId = $map['DatasetFileMetaId'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['FileFingerPrint'])) {
            $model->fileFingerPrint = $map['FileFingerPrint'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileUpdateTime'])) {
            $model->fileUpdateTime = $map['FileUpdateTime'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}

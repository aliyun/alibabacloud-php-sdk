<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models\UploadMediaByURLRequest;

use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\UploadMediaByURLRequest\uploadMetadatas\s3UploadInfo;
use AlibabaCloud\Tea\Model;

class uploadMetadatas extends Model
{
    /**
     * @var string
     */
    public $fileExtension;

    /**
     * @var s3UploadInfo
     */
    public $s3UploadInfo;

    /**
     * @var string
     */
    public $sourceURL;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'fileExtension' => 'FileExtension',
        's3UploadInfo'  => 'S3UploadInfo',
        'sourceURL'     => 'SourceURL',
        'title'         => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileExtension) {
            $res['FileExtension'] = $this->fileExtension;
        }
        if (null !== $this->s3UploadInfo) {
            $res['S3UploadInfo'] = null !== $this->s3UploadInfo ? $this->s3UploadInfo->toMap() : null;
        }
        if (null !== $this->sourceURL) {
            $res['SourceURL'] = $this->sourceURL;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadMetadatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileExtension'])) {
            $model->fileExtension = $map['FileExtension'];
        }
        if (isset($map['S3UploadInfo'])) {
            $model->s3UploadInfo = s3UploadInfo::fromMap($map['S3UploadInfo']);
        }
        if (isset($map['SourceURL'])) {
            $model->sourceURL = $map['SourceURL'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

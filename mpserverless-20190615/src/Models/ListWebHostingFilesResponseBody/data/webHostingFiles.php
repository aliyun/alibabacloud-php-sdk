<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingFilesResponseBody\data;

use AlibabaCloud\Tea\Model;

class webHostingFiles extends Model
{
    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $ETag;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $signedUrl;
    protected $_name = [
        'filePath'         => 'FilePath',
        'contentType'      => 'ContentType',
        'ETag'             => 'ETag',
        'size'             => 'Size',
        'lastModifiedTime' => 'LastModifiedTime',
        'signedUrl'        => 'SignedUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->signedUrl) {
            $res['SignedUrl'] = $this->signedUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webHostingFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['SignedUrl'])) {
            $model->signedUrl = $map['SignedUrl'];
        }

        return $model;
    }
}

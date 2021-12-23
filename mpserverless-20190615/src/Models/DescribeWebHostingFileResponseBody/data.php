<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeWebHostingFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $ETag;

    /**
     * @var bool
     */
    public $exists;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $signedUrl;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'contentType'      => 'ContentType',
        'ETag'             => 'ETag',
        'exists'           => 'Exists',
        'filePath'         => 'FilePath',
        'lastModifiedTime' => 'LastModifiedTime',
        'signedUrl'        => 'SignedUrl',
        'size'             => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->exists) {
            $res['Exists'] = $this->exists;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->signedUrl) {
            $res['SignedUrl'] = $this->signedUrl;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['Exists'])) {
            $model->exists = $map['Exists'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['SignedUrl'])) {
            $model->signedUrl = $map['SignedUrl'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

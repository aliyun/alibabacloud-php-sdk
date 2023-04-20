<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeWebHostingFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example image/png
     *
     * @var string
     */
    public $contentType;

    /**
     * @example test
     *
     * @var string
     */
    public $ETag;

    /**
     * @example true
     *
     * @var bool
     */
    public $exists;

    /**
     * @example /error.png
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 1590398956000
     *
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @example http://fbpsbvmo-154159039388****-static.oss-cn-zhangjiakou.aliyuncs.com/0e16bb12-14af-4635-b24c-5ac1a9a*****\/error.png?Expires=1590460358&OSSAccessKeyId=STS.NUcPHyHQr2xQ6zAe5ybi*****&Signature=b2L4kBEFrA2EZvZbm3B%2FyNSxVeA%3D&security-token=CAISgQJ1q6Ft5B2yfSjIr5bWG%2FLNpY5Thbq6NFzwgTUsbuZ4grfe0Tz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOjKEbIPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAU49tl4awl%2F0fID3wRpPDCKqg%2BfXifeRRPI2Tr%2Bm4PmK4qPffsI%2F5JXB4JA71uN5TkvMC6LxxTuQnJaTateDrfEDnzyyIVISjvQ7rzt8sxZCnDDfjzx6Lc5TAELuapDjeXK6w%2BWkbhwBTWcjrGAJvdaOA4IodaPZyDlyhO4jt1nv
     *
     * @var string
     */
    public $signedUrl;

    /**
     * @example 235628
     *
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

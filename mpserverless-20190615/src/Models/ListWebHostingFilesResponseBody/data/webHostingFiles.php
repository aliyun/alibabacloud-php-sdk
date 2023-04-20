<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingFilesResponseBody\data;

use AlibabaCloud\Tea\Model;

class webHostingFiles extends Model
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
     * @example error/error.jpg
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
     * @example http://fbpsbvmo-15415903938*****-static.oss-cn-zhangjiakou.aliyuncs.com/0e16bb12-14af-4635-b24c-5ac1a9a*****\/test/error.jpg?Expires=1590462873&OSSAccessKeyId=STS.NT9oaFvbRzj8vSViJL2y*****&Signature=pSMbsZUZGwfZEcvT9R7VZPMp%2BVA%3D&security-token=CAISgQJ1q6Ft5B2yfSjIr5eMJNvym71zzajTdHXnjUoZPvYVjIHgpjz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOgBG3HPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAZ6L6gVhZYEK78ZBsQq1hP9nvtEGENelJYiTPWAHmB1mDutOaEzgSpwVMaP3FWpMTy6KgBKMox1NJLUZJK23NlJIlMIJ8lVyCQOG4Ig7oTXTbFc0PQMShK%2FeQIQ2WvZ2x%2F%2FZdgaZIeQR4WnawsWF%2BYC4ScTig0wYTuaLx7pH2WHJ
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
     * @return webHostingFiles
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

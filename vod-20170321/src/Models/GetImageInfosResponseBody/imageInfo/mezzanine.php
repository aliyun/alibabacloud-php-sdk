<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfosResponseBody\imageInfo;

use AlibabaCloud\Tea\Model;

class mezzanine extends Model
{
    /**
     * @description The size of the image file. Unit: bytes.
     *
     * @example 8932
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description The OSS URL of the image file.
     *
     * @example https://outin-bfefbb*****163e1c7426.oss-cn-XXXXXXXX.aliyuncs.com/image/default/5E84CD536*****D4DAD.png?Expires=1590982353&OSSAccessKeyId=*****&Signature=ALPET74o*****c%3D
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The height of the image. Unit: pixels.
     *
     * @example 200
     *
     * @var int
     */
    public $height;

    /**
     * @description The name of the source file.
     *
     * @example ****.gif
     *
     * @var string
     */
    public $originalFileName;

    /**
     * @description The width of the image. Unit: pixels.
     *
     * @example 200
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'fileSize'         => 'FileSize',
        'fileURL'          => 'FileURL',
        'height'           => 'Height',
        'originalFileName' => 'OriginalFileName',
        'width'            => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->originalFileName) {
            $res['OriginalFileName'] = $this->originalFileName;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mezzanine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['OriginalFileName'])) {
            $model->originalFileName = $map['OriginalFileName'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

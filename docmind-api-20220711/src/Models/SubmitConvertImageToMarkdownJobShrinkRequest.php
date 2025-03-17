<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;

class SubmitConvertImageToMarkdownJobShrinkRequest extends Model
{
    /**
     * @example jpg
     *
     * @var string
     */
    public $imageNameExtension;

    /**
     * @var string
     */
    public $imageNamesShrink;

    /**
     * @var string
     */
    public $imageUrlsShrink;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'imageNameExtension' => 'ImageNameExtension',
        'imageNamesShrink' => 'ImageNames',
        'imageUrlsShrink' => 'ImageUrls',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageNameExtension) {
            $res['ImageNameExtension'] = $this->imageNameExtension;
        }
        if (null !== $this->imageNamesShrink) {
            $res['ImageNames'] = $this->imageNamesShrink;
        }
        if (null !== $this->imageUrlsShrink) {
            $res['ImageUrls'] = $this->imageUrlsShrink;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitConvertImageToMarkdownJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageNameExtension'])) {
            $model->imageNameExtension = $map['ImageNameExtension'];
        }
        if (isset($map['ImageNames'])) {
            $model->imageNamesShrink = $map['ImageNames'];
        }
        if (isset($map['ImageUrls'])) {
            $model->imageUrlsShrink = $map['ImageUrls'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        return $model;
    }
}

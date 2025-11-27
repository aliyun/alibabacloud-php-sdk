<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;

class SubmitConvertImageToPdfJobShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $enableEventCallback;

    /**
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
        'enableEventCallback' => 'EnableEventCallback',
        'imageNameExtension' => 'ImageNameExtension',
        'imageNamesShrink' => 'ImageNames',
        'imageUrlsShrink' => 'ImageUrls',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableEventCallback) {
            $res['EnableEventCallback'] = $this->enableEventCallback;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableEventCallback'])) {
            $model->enableEventCallback = $map['EnableEventCallback'];
        }

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

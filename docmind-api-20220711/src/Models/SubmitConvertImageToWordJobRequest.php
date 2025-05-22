<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;

class SubmitConvertImageToWordJobRequest extends Model
{
    /**
     * @var string
     */
    public $imageNameExtension;

    /**
     * @var string[]
     */
    public $imageNames;

    /**
     * @var string[]
     */
    public $imageUrls;

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
        'imageNames' => 'ImageNames',
        'imageUrls' => 'ImageUrls',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
    ];

    public function validate()
    {
        if (\is_array($this->imageNames)) {
            Model::validateArray($this->imageNames);
        }
        if (\is_array($this->imageUrls)) {
            Model::validateArray($this->imageUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageNameExtension) {
            $res['ImageNameExtension'] = $this->imageNameExtension;
        }

        if (null !== $this->imageNames) {
            if (\is_array($this->imageNames)) {
                $res['ImageNames'] = [];
                $n1 = 0;
                foreach ($this->imageNames as $item1) {
                    $res['ImageNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->imageUrls) {
            if (\is_array($this->imageUrls)) {
                $res['ImageUrls'] = [];
                $n1 = 0;
                foreach ($this->imageUrls as $item1) {
                    $res['ImageUrls'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ImageNameExtension'])) {
            $model->imageNameExtension = $map['ImageNameExtension'];
        }

        if (isset($map['ImageNames'])) {
            if (!empty($map['ImageNames'])) {
                $model->imageNames = [];
                $n1 = 0;
                foreach ($map['ImageNames'] as $item1) {
                    $model->imageNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ImageUrls'])) {
            if (!empty($map['ImageUrls'])) {
                $model->imageUrls = [];
                $n1 = 0;
                foreach ($map['ImageUrls'] as $item1) {
                    $model->imageUrls[$n1++] = $item1;
                }
            }
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

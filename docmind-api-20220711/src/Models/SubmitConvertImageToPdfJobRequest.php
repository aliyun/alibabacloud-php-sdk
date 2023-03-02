<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;

class SubmitConvertImageToPdfJobRequest extends Model
{
    /**
     * @example JPG
     *
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
    protected $_name = [
        'imageNameExtension' => 'ImageNameExtension',
        'imageNames'         => 'ImageNames',
        'imageUrls'          => 'ImageUrls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageNameExtension) {
            $res['ImageNameExtension'] = $this->imageNameExtension;
        }
        if (null !== $this->imageNames) {
            $res['ImageNames'] = $this->imageNames;
        }
        if (null !== $this->imageUrls) {
            $res['ImageUrls'] = $this->imageUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitConvertImageToPdfJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageNameExtension'])) {
            $model->imageNameExtension = $map['ImageNameExtension'];
        }
        if (isset($map['ImageNames'])) {
            if (!empty($map['ImageNames'])) {
                $model->imageNames = $map['ImageNames'];
            }
        }
        if (isset($map['ImageUrls'])) {
            if (!empty($map['ImageUrls'])) {
                $model->imageUrls = $map['ImageUrls'];
            }
        }

        return $model;
    }
}

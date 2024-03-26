<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results;

use AlibabaCloud\Tea\Model;

class customImage extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $libId;
    protected $_name = [
        'imageId' => 'ImageId',
        'libId'   => 'LibId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customImage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        return $model;
    }
}

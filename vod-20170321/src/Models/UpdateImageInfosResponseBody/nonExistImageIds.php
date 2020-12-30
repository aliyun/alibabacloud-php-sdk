<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosResponseBody;

use AlibabaCloud\Tea\Model;

class nonExistImageIds extends Model
{
    /**
     * @var string[]
     */
    public $imageId;
    protected $_name = [
        'imageId' => 'ImageId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nonExistImageIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = $map['ImageId'];
            }
        }

        return $model;
    }
}

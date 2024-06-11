<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeleteImagesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $imageIds;
    protected $_name = [
        'imageIds' => 'ImageIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageIds) {
            $res['ImageIds'] = $this->imageIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageIds'])) {
            if (!empty($map['ImageIds'])) {
                $model->imageIds = $map['ImageIds'];
            }
        }

        return $model;
    }
}

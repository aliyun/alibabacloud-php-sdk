<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomImageNameRequest extends Model
{
    /**
     * @example imgc-075cllfeuazh0****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example imagename
     *
     * @var string
     */
    public $imageName;
    protected $_name = [
        'imageId'   => 'ImageId',
        'imageName' => 'ImageName',
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
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomImageNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        return $model;
    }
}

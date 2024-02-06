<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyImageAttributeRequest extends Model
{
    /**
     * @description The ID of the image.
     *
     * @example m-5t4xwkfkbs0uxv0kymdb6uip7
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
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
     * @return ModifyImageAttributeRequest
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

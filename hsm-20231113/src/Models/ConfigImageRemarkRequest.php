<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigImageRemarkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example image-d79x4k11pmg19****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description This parameter is required.
     *
     * @example hsm-****
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'imageId' => 'ImageId',
        'remark'  => 'Remark',
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigImageRemarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}

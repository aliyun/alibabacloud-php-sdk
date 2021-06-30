<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models;

use AlibabaCloud\Tea\Model;

class DetectFaceAttributesRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $imageFile;
    protected $_name = [
        'bizType'   => 'BizType',
        'bizId'     => 'BizId',
        'imageUrl'  => 'ImageUrl',
        'imageFile' => 'ImageFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->imageFile) {
            $res['ImageFile'] = $this->imageFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectFaceAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['ImageFile'])) {
            $model->imageFile = $map['ImageFile'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectFaceAttributesAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageFileObject;

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
    protected $_name = [
        'imageFileObject' => 'ImageFileObject',
        'bizType'         => 'BizType',
        'bizId'           => 'BizId',
        'imageUrl'        => 'ImageUrl',
    ];

    public function validate()
    {
        Model::validateRequired('imageFileObject', $this->imageFileObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageFileObject) {
            $res['ImageFileObject'] = $this->imageFileObject;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectFaceAttributesAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageFileObject'])) {
            $model->imageFileObject = $map['ImageFileObject'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}

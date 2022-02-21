<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ModifyDeviceCaptureRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $image;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $video;
    protected $_name = [
        'id'      => 'Id',
        'image'   => 'Image',
        'ownerId' => 'OwnerId',
        'video'   => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->video) {
            $res['Video'] = $this->video;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDeviceCaptureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Video'])) {
            $model->video = $map['Video'];
        }

        return $model;
    }
}

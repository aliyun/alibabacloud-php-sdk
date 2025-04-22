<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class FaceThumbnail extends Model
{
    /**
     * @var string
     */
    public $faceGroupId;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var string
     */
    public $faceThumbnail;
    protected $_name = [
        'faceGroupId' => 'face_group_id',
        'faceId' => 'face_id',
        'faceThumbnail' => 'face_thumbnail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceGroupId) {
            $res['face_group_id'] = $this->faceGroupId;
        }

        if (null !== $this->faceId) {
            $res['face_id'] = $this->faceId;
        }

        if (null !== $this->faceThumbnail) {
            $res['face_thumbnail'] = $this->faceThumbnail;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['face_group_id'])) {
            $model->faceGroupId = $map['face_group_id'];
        }

        if (isset($map['face_id'])) {
            $model->faceId = $map['face_id'];
        }

        if (isset($map['face_thumbnail'])) {
            $model->faceThumbnail = $map['face_thumbnail'];
        }

        return $model;
    }
}

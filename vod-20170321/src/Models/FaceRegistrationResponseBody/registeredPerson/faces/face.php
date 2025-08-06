<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\FaceRegistrationResponseBody\registeredPerson\faces;

use AlibabaCloud\Dara\Model;

class face extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $quality;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'imageId' => 'ImageId',
        'quality' => 'Quality',
        'target' => 'Target',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}

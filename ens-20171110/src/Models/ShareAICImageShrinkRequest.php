<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ShareAICImageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $usersShrink;
    protected $_name = [
        'imageId' => 'ImageId',
        'usersShrink' => 'Users',
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

        if (null !== $this->usersShrink) {
            $res['Users'] = $this->usersShrink;
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

        if (isset($map['Users'])) {
            $model->usersShrink = $map['Users'];
        }

        return $model;
    }
}

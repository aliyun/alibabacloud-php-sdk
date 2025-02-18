<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results;

use AlibabaCloud\Dara\Model;

class customImage extends Model
{
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $libId;
    protected $_name = [
        'imageId' => 'ImageId',
        'libId'   => 'LibId',
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

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
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

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        return $model;
    }
}

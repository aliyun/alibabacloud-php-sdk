<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Dara\Model;

class ChangeSkyRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $replaceImageURL;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'replaceImageURL' => 'ReplaceImageURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        if (null !== $this->replaceImageURL) {
            $res['ReplaceImageURL'] = $this->replaceImageURL;
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
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        if (isset($map['ReplaceImageURL'])) {
            $model->replaceImageURL = $map['ReplaceImageURL'];
        }

        return $model;
    }
}

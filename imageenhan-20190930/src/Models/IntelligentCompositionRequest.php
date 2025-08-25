<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Dara\Model;

class IntelligentCompositionRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var int
     */
    public $numBoxes;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'numBoxes' => 'NumBoxes',
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

        if (null !== $this->numBoxes) {
            $res['NumBoxes'] = $this->numBoxes;
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

        if (isset($map['NumBoxes'])) {
            $model->numBoxes = $map['NumBoxes'];
        }

        return $model;
    }
}

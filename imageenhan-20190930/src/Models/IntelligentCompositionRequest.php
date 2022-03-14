<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return IntelligentCompositionRequest
     */
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

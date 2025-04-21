<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverResponseBody\data;

use AlibabaCloud\Dara\Model;

class outputs extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'confidence' => 'Confidence',
        'imageURL' => 'ImageURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverResponseBody\data;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var float
     */
    public $confidence;
    protected $_name = [
        'imageURL'   => 'ImageURL',
        'confidence' => 'Confidence',
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
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        return $model;
    }
}

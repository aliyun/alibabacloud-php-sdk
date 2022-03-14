<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RefineMaskRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $maskImageURL;
    protected $_name = [
        'imageURL'     => 'ImageURL',
        'maskImageURL' => 'MaskImageURL',
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
        if (null !== $this->maskImageURL) {
            $res['MaskImageURL'] = $this->maskImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefineMaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['MaskImageURL'])) {
            $model->maskImageURL = $map['MaskImageURL'];
        }

        return $model;
    }
}

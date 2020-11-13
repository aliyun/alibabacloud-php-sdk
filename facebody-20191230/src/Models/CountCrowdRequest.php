<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class CountCrowdRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var bool
     */
    public $isShow;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'isShow'   => 'IsShow',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->isShow) {
            $res['IsShow'] = $this->isShow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountCrowdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['IsShow'])) {
            $model->isShow = $map['IsShow'];
        }

        return $model;
    }
}

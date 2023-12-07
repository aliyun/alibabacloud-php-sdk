<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageResponseBody;

use AlibabaCloud\Tea\Model;

class picInfo extends Model
{
    /**
     * @description The result of category prediction. If a category is specified in the request, the specified category prevails.
     *
     * @example 88888888
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description The result of subject identification. The subject area of the image is in the format of `x1,x2,y1,y2`. `x1 and y1` represent the position in the upper-left corner, in pixels. `x2 and y2` represent the position in the lower-right corner, in pixels. If a subject area is specified in the request, the specified subject area prevails.
     *
     * @example 94,691,206,650
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'region'     => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return picInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}

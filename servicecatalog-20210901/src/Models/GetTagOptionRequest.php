<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class GetTagOptionRequest extends Model
{
    /**
     * @description The ID of the tag option.
     *
     * @example tag-bp1r3mxq3t****
     *
     * @var string
     */
    public $tagOptionId;
    protected $_name = [
        'tagOptionId' => 'TagOptionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagOptionId) {
            $res['TagOptionId'] = $this->tagOptionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTagOptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagOptionId'])) {
            $model->tagOptionId = $map['TagOptionId'];
        }

        return $model;
    }
}

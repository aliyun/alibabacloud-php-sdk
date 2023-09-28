<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class DeleteTagOptionRequest extends Model
{
    /**
     * @description The ID of the tag option.
     *
     * @example tag-bp1u6mdf3d****
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
     * @return DeleteTagOptionRequest
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

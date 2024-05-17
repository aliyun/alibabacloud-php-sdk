<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DeletePrivateAccessTagRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example tag-d3f64e8bdd4a****
     *
     * @var string
     */
    public $tagId;
    protected $_name = [
        'tagId' => 'TagId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePrivateAccessTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}

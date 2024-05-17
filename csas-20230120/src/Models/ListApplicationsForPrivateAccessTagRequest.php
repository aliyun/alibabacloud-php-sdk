<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationsForPrivateAccessTagRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $tagIds;
    protected $_name = [
        'tagIds' => 'TagIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationsForPrivateAccessTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = $map['TagIds'];
            }
        }

        return $model;
    }
}

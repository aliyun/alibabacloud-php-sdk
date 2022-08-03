<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models;

use AlibabaCloud\Tea\Model;

class ListParentsRequest extends Model
{
    /**
     * @var string
     */
    public $childId;
    protected $_name = [
        'childId' => 'ChildId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childId) {
            $res['ChildId'] = $this->childId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListParentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildId'])) {
            $model->childId = $map['ChildId'];
        }

        return $model;
    }
}

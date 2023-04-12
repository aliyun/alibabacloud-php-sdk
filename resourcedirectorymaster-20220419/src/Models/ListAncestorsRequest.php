<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class ListAncestorsRequest extends Model
{
    /**
     * @description The ID of the subfolder.
     *
     * @example fd-i1c9nr****
     *
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
     * @return ListAncestorsRequest
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

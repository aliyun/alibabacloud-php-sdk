<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListCommonCateSecondFloorRequest extends Model
{
    /**
     * @example 80010
     *
     * @var int
     */
    public $parentCateId;
    protected $_name = [
        'parentCateId' => 'ParentCateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentCateId) {
            $res['ParentCateId'] = $this->parentCateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCommonCateSecondFloorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentCateId'])) {
            $model->parentCateId = $map['ParentCateId'];
        }

        return $model;
    }
}

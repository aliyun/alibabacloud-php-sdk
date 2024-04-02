<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DeleteBizTypeRequest extends Model
{
    /**
     * @var string
     */
    public $bizTypeName;
    protected $_name = [
        'bizTypeName' => 'BizTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypeName) {
            $res['BizTypeName'] = $this->bizTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBizTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypeName'])) {
            $model->bizTypeName = $map['BizTypeName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class ListClassificationsRequest extends Model
{
    /**
     * @example 01
     *
     * @var string
     */
    public $parentCode;
    protected $_name = [
        'parentCode' => 'ParentCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentCode) {
            $res['ParentCode'] = $this->parentCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClassificationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentCode'])) {
            $model->parentCode = $map['ParentCode'];
        }

        return $model;
    }
}

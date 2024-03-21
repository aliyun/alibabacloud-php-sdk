<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class ListAreasRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $parentCode;
    protected $_name = [
        'bizType'    => 'BizType',
        'parentCode' => 'ParentCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->parentCode) {
            $res['ParentCode'] = $this->parentCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAreasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ParentCode'])) {
            $model->parentCode = $map['ParentCode'];
        }

        return $model;
    }
}

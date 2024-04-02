<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserBizTypesRequest extends Model
{
    /**
     * @var bool
     */
    public $customized;
    protected $_name = [
        'customized' => 'Customized',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customized) {
            $res['Customized'] = $this->customized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserBizTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Customized'])) {
            $model->customized = $map['Customized'];
        }

        return $model;
    }
}

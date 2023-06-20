<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\shopInfo\wangWangs;

use AlibabaCloud\Tea\Model;

class wangWang extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $remark;

    /**
     * @example ABC
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'remark'   => 'Remark',
        'userName' => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wangWang
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

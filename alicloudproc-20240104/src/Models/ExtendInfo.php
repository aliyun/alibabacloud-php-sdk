<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104\Models;

use AlibabaCloud\Tea\Model;

class ExtendInfo extends Model
{
    /**
     * @example 29990.00
     *
     * @var float
     */
    public $depositAmount;

    /**
     * @example 其他说明事项XXX
     *
     * @var string
     */
    public $desc;
    protected $_name = [
        'depositAmount' => 'depositAmount',
        'desc'          => 'desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depositAmount) {
            $res['depositAmount'] = $this->depositAmount;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtendInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['depositAmount'])) {
            $model->depositAmount = $map['depositAmount'];
        }
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        return $model;
    }
}

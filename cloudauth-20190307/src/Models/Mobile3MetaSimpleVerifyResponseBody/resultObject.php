<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $bizCode;

    /**
     * @example CMCC
     *
     * @var string
     */
    public $ispName;
    protected $_name = [
        'bizCode' => 'BizCode',
        'ispName' => 'IspName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }

        return $model;
    }
}

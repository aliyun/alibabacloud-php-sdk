<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileOnlineTimeResponseBody;

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

    /**
     * @example 5
     *
     * @var string
     */
    public $timeCode;
    protected $_name = [
        'bizCode'  => 'BizCode',
        'ispName'  => 'IspName',
        'timeCode' => 'TimeCode',
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
        if (null !== $this->timeCode) {
            $res['TimeCode'] = $this->timeCode;
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
        if (isset($map['TimeCode'])) {
            $model->timeCode = $map['TimeCode'];
        }

        return $model;
    }
}

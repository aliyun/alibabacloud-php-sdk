<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetUserSpecialVersionGpuResourceInfoRequest extends Model
{
    /**
     * @description 付费类型
     *
     * @var int
     */
    public $payType;
    protected $_name = [
        'payType' => 'PayType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserSpecialVersionGpuResourceInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        return $model;
    }
}

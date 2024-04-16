<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetAccountForAppResponseBody;

use AlibabaCloud\Tea\Model;

class retValue extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isVip;

    /**
     * @example 2022-05-12 15:22:18
     *
     * @var string
     */
    public $strVipExpire;

    /**
     * @example 1652340138347
     *
     * @var int
     */
    public $vipExpireAt;
    protected $_name = [
        'isVip'        => 'IsVip',
        'strVipExpire' => 'StrVipExpire',
        'vipExpireAt'  => 'VipExpireAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isVip) {
            $res['IsVip'] = $this->isVip;
        }
        if (null !== $this->strVipExpire) {
            $res['StrVipExpire'] = $this->strVipExpire;
        }
        if (null !== $this->vipExpireAt) {
            $res['VipExpireAt'] = $this->vipExpireAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsVip'])) {
            $model->isVip = $map['IsVip'];
        }
        if (isset($map['StrVipExpire'])) {
            $model->strVipExpire = $map['StrVipExpire'];
        }
        if (isset($map['VipExpireAt'])) {
            $model->vipExpireAt = $map['VipExpireAt'];
        }

        return $model;
    }
}

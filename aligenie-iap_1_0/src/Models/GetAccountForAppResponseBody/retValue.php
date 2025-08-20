<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetAccountForAppResponseBody;

use AlibabaCloud\Dara\Model;

class retValue extends Model
{
    /**
     * @var bool
     */
    public $isVip;

    /**
     * @var string
     */
    public $strVipExpire;

    /**
     * @var int
     */
    public $vipExpireAt;
    protected $_name = [
        'isVip' => 'IsVip',
        'strVipExpire' => 'StrVipExpire',
        'vipExpireAt' => 'VipExpireAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

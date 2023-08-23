<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class QueryUserDeviceListByTmeUserIdRequest extends Model
{
    /**
     * @var string
     */
    public $sp;

    /**
     * @var string
     */
    public $tmeUserId;
    protected $_name = [
        'sp'        => 'Sp',
        'tmeUserId' => 'TmeUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sp) {
            $res['Sp'] = $this->sp;
        }
        if (null !== $this->tmeUserId) {
            $res['TmeUserId'] = $this->tmeUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUserDeviceListByTmeUserIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sp'])) {
            $model->sp = $map['Sp'];
        }
        if (isset($map['TmeUserId'])) {
            $model->tmeUserId = $map['TmeUserId'];
        }

        return $model;
    }
}

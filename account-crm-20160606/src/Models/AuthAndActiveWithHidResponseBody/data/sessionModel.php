<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\AuthAndActiveWithHidResponseBody\data;

use AlibabaCloud\Dara\Model;

class sessionModel extends Model
{
    /**
     * @var string
     */
    public $aliyunPK;

    /**
     * @var string
     */
    public $loginTicket;
    protected $_name = [
        'aliyunPK' => 'AliyunPK',
        'loginTicket' => 'LoginTicket',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunPK) {
            $res['AliyunPK'] = $this->aliyunPK;
        }

        if (null !== $this->loginTicket) {
            $res['LoginTicket'] = $this->loginTicket;
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
        if (isset($map['AliyunPK'])) {
            $model->aliyunPK = $map['AliyunPK'];
        }

        if (isset($map['LoginTicket'])) {
            $model->loginTicket = $map['LoginTicket'];
        }

        return $model;
    }
}

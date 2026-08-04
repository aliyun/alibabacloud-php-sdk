<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class AsyncCreateAgAccountRequest extends Model
{
    /**
     * @var string
     */
    public $loginEmail;

    /**
     * @var string
     */
    public $maserAccountInfo;

    /**
     * @var string
     */
    public $mpk;
    protected $_name = [
        'loginEmail' => 'LoginEmail',
        'maserAccountInfo' => 'MaserAccountInfo',
        'mpk' => 'Mpk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginEmail) {
            $res['LoginEmail'] = $this->loginEmail;
        }

        if (null !== $this->maserAccountInfo) {
            $res['MaserAccountInfo'] = $this->maserAccountInfo;
        }

        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
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
        if (isset($map['LoginEmail'])) {
            $model->loginEmail = $map['LoginEmail'];
        }

        if (isset($map['MaserAccountInfo'])) {
            $model->maserAccountInfo = $map['MaserAccountInfo'];
        }

        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        return $model;
    }
}

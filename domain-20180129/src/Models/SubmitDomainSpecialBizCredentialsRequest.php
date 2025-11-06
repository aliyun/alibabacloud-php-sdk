<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class SubmitDomainSpecialBizCredentialsRequest extends Model
{
    /**
     * @var int
     */
    public $bizId;

    /**
     * @var string
     */
    public $credentials;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'bizId' => 'BizId',
        'credentials' => 'Credentials',
        'extend' => 'Extend',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->credentials) {
            $res['Credentials'] = $this->credentials;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Credentials'])) {
            $model->credentials = $map['Credentials'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}

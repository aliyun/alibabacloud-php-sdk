<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218\Models;

use AlibabaCloud\Dara\Model;

class ExpireLoginTokenRequest extends Model
{
    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $loginToken;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'endUserId' => 'EndUserId',
        'loginToken' => 'LoginToken',
        'officeSiteId' => 'OfficeSiteId',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}

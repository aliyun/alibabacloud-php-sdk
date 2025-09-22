<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\QueryOrderSessionListPopResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $sessionId;

    /**
     * @var string
     */
    public $signInDate;
    protected $_name = [
        'sessionId' => 'SessionId',
        'signInDate' => 'SignInDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->signInDate) {
            $res['SignInDate'] = $this->signInDate;
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
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['SignInDate'])) {
            $model->signInDate = $map['SignInDate'];
        }

        return $model;
    }
}

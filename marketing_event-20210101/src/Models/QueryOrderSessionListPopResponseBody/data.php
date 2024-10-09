<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\QueryOrderSessionListPopResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $sessionId;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $signInDate;
    protected $_name = [
        'sessionId'  => 'SessionId',
        'signInDate' => 'SignInDate',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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

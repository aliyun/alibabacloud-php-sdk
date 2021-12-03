<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class QueryOutAccountBindStatusRequest extends Model
{
    /**
     * @var string
     */
    public $accountDomain;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $gameId;
    protected $_name = [
        'accountDomain' => 'AccountDomain',
        'accountId'     => 'AccountId',
        'gameId'        => 'GameId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDomain) {
            $res['AccountDomain'] = $this->accountDomain;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOutAccountBindStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountDomain'])) {
            $model->accountDomain = $map['AccountDomain'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }

        return $model;
    }
}

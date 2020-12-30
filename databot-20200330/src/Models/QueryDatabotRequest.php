<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Databot\V20200330\Models;

use AlibabaCloud\Tea\Model;

class QueryDatabotRequest extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'accessId'  => 'AccessId',
        'query'     => 'Query',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDatabotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}

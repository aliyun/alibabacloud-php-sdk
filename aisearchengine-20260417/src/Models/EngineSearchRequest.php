<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchRequest\query;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchRequest\user;

class EngineSearchRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $grey;

    /**
     * @var query
     */
    public $query;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var user
     */
    public $user;
    protected $_name = [
        'appId' => 'appId',
        'grey' => 'grey',
        'query' => 'query',
        'sessionId' => 'sessionId',
        'user' => 'user',
    ];

    public function validate()
    {
        if (null !== $this->query) {
            $this->query->validate();
        }
        if (null !== $this->user) {
            $this->user->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->grey) {
            $res['grey'] = $this->grey;
        }

        if (null !== $this->query) {
            $res['query'] = null !== $this->query ? $this->query->toArray($noStream) : $this->query;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->user) {
            $res['user'] = null !== $this->user ? $this->user->toArray($noStream) : $this->user;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['grey'])) {
            $model->grey = $map['grey'];
        }

        if (isset($map['query'])) {
            $model->query = query::fromMap($map['query']);
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['user'])) {
            $model->user = user::fromMap($map['user']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRayClusterResponseBody\headSpec;

use AlibabaCloud\Dara\Model;

class gftConfig extends Model
{
    /**
     * @var string
     */
    public $redisPassword;

    /**
     * @var string
     */
    public $redisUrl;

    /**
     * @var string
     */
    public $redisUsername;
    protected $_name = [
        'redisPassword' => 'redisPassword',
        'redisUrl' => 'redisUrl',
        'redisUsername' => 'redisUsername',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->redisPassword) {
            $res['redisPassword'] = $this->redisPassword;
        }

        if (null !== $this->redisUrl) {
            $res['redisUrl'] = $this->redisUrl;
        }

        if (null !== $this->redisUsername) {
            $res['redisUsername'] = $this->redisUsername;
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
        if (isset($map['redisPassword'])) {
            $model->redisPassword = $map['redisPassword'];
        }

        if (isset($map['redisUrl'])) {
            $model->redisUrl = $map['redisUrl'];
        }

        if (isset($map['redisUsername'])) {
            $model->redisUsername = $map['redisUsername'];
        }

        return $model;
    }
}

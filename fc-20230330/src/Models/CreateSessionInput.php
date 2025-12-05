<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class CreateSessionInput extends Model
{
    /**
     * @var bool
     */
    public $disableSessionIdReuse;

    /**
     * @var NASConfig
     */
    public $nasConfig;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $sessionIdleTimeoutInSeconds;

    /**
     * @var int
     */
    public $sessionTTLInSeconds;
    protected $_name = [
        'disableSessionIdReuse' => 'disableSessionIdReuse',
        'nasConfig' => 'nasConfig',
        'sessionId' => 'sessionId',
        'sessionIdleTimeoutInSeconds' => 'sessionIdleTimeoutInSeconds',
        'sessionTTLInSeconds' => 'sessionTTLInSeconds',
    ];

    public function validate()
    {
        if (null !== $this->nasConfig) {
            $this->nasConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableSessionIdReuse) {
            $res['disableSessionIdReuse'] = $this->disableSessionIdReuse;
        }

        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toArray($noStream) : $this->nasConfig;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionIdleTimeoutInSeconds) {
            $res['sessionIdleTimeoutInSeconds'] = $this->sessionIdleTimeoutInSeconds;
        }

        if (null !== $this->sessionTTLInSeconds) {
            $res['sessionTTLInSeconds'] = $this->sessionTTLInSeconds;
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
        if (isset($map['disableSessionIdReuse'])) {
            $model->disableSessionIdReuse = $map['disableSessionIdReuse'];
        }

        if (isset($map['nasConfig'])) {
            $model->nasConfig = NASConfig::fromMap($map['nasConfig']);
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sessionIdleTimeoutInSeconds'])) {
            $model->sessionIdleTimeoutInSeconds = $map['sessionIdleTimeoutInSeconds'];
        }

        if (isset($map['sessionTTLInSeconds'])) {
            $model->sessionTTLInSeconds = $map['sessionTTLInSeconds'];
        }

        return $model;
    }
}

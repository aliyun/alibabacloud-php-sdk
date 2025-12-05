<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class UpdateSessionInput extends Model
{
    /**
     * @var bool
     */
    public $disableSessionIdReuse;

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
        'sessionIdleTimeoutInSeconds' => 'sessionIdleTimeoutInSeconds',
        'sessionTTLInSeconds' => 'sessionTTLInSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableSessionIdReuse) {
            $res['disableSessionIdReuse'] = $this->disableSessionIdReuse;
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

        if (isset($map['sessionIdleTimeoutInSeconds'])) {
            $model->sessionIdleTimeoutInSeconds = $map['sessionIdleTimeoutInSeconds'];
        }

        if (isset($map['sessionTTLInSeconds'])) {
            $model->sessionTTLInSeconds = $map['sessionTTLInSeconds'];
        }

        return $model;
    }
}

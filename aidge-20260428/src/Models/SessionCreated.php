<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionCreated\session;

class SessionCreated extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $causedBy;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var int
     */
    public $expiresAt;

    /**
     * @var session
     */
    public $session;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'sessionId' => 'session_id',
        'causedBy' => 'caused_by',
        'createdAt' => 'created_at',
        'expiresAt' => 'expires_at',
        'session' => 'session',
    ];

    public function validate()
    {
        if (null !== $this->session) {
            $this->session->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }

        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }

        if (null !== $this->causedBy) {
            $res['caused_by'] = $this->causedBy;
        }

        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->expiresAt) {
            $res['expires_at'] = $this->expiresAt;
        }

        if (null !== $this->session) {
            $res['session'] = null !== $this->session ? $this->session->toArray($noStream) : $this->session;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['event_id'])) {
            $model->eventId = $map['event_id'];
        }

        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }

        if (isset($map['caused_by'])) {
            $model->causedBy = $map['caused_by'];
        }

        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['expires_at'])) {
            $model->expiresAt = $map['expires_at'];
        }

        if (isset($map['session'])) {
            $model->session = session::fromMap($map['session']);
        }

        return $model;
    }
}

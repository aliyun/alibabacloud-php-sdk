<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session;

class SessionUpdated extends Model
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
     * @var string[]
     */
    public $warnings;

    /**
     * @var session
     */
    public $session;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'sessionId' => 'session_id',
        'causedBy' => 'caused_by',
        'warnings' => 'warnings',
        'session' => 'session',
    ];

    public function validate()
    {
        if (\is_array($this->warnings)) {
            Model::validateArray($this->warnings);
        }
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

        if (null !== $this->warnings) {
            if (\is_array($this->warnings)) {
                $res['warnings'] = [];
                $n1 = 0;
                foreach ($this->warnings as $item1) {
                    $res['warnings'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['warnings'])) {
            if (!empty($map['warnings'])) {
                $model->warnings = [];
                $n1 = 0;
                foreach ($map['warnings'] as $item1) {
                    $model->warnings[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['session'])) {
            $model->session = session::fromMap($map['session']);
        }

        return $model;
    }
}

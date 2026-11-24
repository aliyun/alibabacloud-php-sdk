<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionCreate\session;

class SessionCreate extends Model
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
    public $mode;

    /**
     * @var string[]
     */
    public $languagePair;

    /**
     * @var session
     */
    public $session;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'mode' => 'mode',
        'languagePair' => 'language_pair',
        'session' => 'session',
    ];

    public function validate()
    {
        if (\is_array($this->languagePair)) {
            Model::validateArray($this->languagePair);
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

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->languagePair) {
            if (\is_array($this->languagePair)) {
                $res['language_pair'] = [];
                $n1 = 0;
                foreach ($this->languagePair as $item1) {
                    $res['language_pair'][$n1] = $item1;
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

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['language_pair'])) {
            if (!empty($map['language_pair'])) {
                $model->languagePair = [];
                $n1 = 0;
                foreach ($map['language_pair'] as $item1) {
                    $model->languagePair[$n1] = $item1;
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

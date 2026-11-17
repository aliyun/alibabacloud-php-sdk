<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateEventsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateEventsRequest\body\events;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateEventsRequest\body\scope;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateEventsRequest\body\session;

class body extends Model
{
    /**
     * @var events[]
     */
    public $events;

    /**
     * @var scope
     */
    public $scope;

    /**
     * @var session
     */
    public $session;
    protected $_name = [
        'events' => 'events',
        'scope' => 'scope',
        'session' => 'session',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (null !== $this->scope) {
            $this->scope->validate();
        }
        if (null !== $this->session) {
            $this->session->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['events'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
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
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['events'] as $item1) {
                    $model->events[$n1] = events::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['scope'])) {
            $model->scope = scope::fromMap($map['scope']);
        }

        if (isset($map['session'])) {
            $model->session = session::fromMap($map['session']);
        }

        return $model;
    }
}

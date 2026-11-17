<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteEventsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteEventsRequest\body\scope;

class body extends Model
{
    /**
     * @var string[]
     */
    public $eventIds;

    /**
     * @var scope
     */
    public $scope;
    protected $_name = [
        'eventIds' => 'eventIds',
        'scope' => 'scope',
    ];

    public function validate()
    {
        if (\is_array($this->eventIds)) {
            Model::validateArray($this->eventIds);
        }
        if (null !== $this->scope) {
            $this->scope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventIds) {
            if (\is_array($this->eventIds)) {
                $res['eventIds'] = [];
                $n1 = 0;
                foreach ($this->eventIds as $item1) {
                    $res['eventIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
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
        if (isset($map['eventIds'])) {
            if (!empty($map['eventIds'])) {
                $model->eventIds = [];
                $n1 = 0;
                foreach ($map['eventIds'] as $item1) {
                    $model->eventIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['scope'])) {
            $model->scope = scope::fromMap($map['scope']);
        }

        return $model;
    }
}

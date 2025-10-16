<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\GetMemoryEventResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $event;
    protected $_name = [
        'event' => 'event',
    ];

    public function validate()
    {
        if (\is_array($this->event)) {
            Model::validateArray($this->event);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->event) {
            if (\is_array($this->event)) {
                $res['event'] = [];
                foreach ($this->event as $key1 => $value1) {
                    $res['event'][$key1] = $value1;
                }
            }
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
        if (isset($map['event'])) {
            if (!empty($map['event'])) {
                $model->event = [];
                foreach ($map['event'] as $key1 => $value1) {
                    $model->event[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class DeliveryOption extends Model
{
    /**
     * @var int
     */
    public $concurrency;
    /**
     * @var string
     */
    public $eventSchema;
    protected $_name = [
        'concurrency' => 'concurrency',
        'eventSchema' => 'eventSchema',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrency) {
            $res['concurrency'] = $this->concurrency;
        }

        if (null !== $this->eventSchema) {
            $res['eventSchema'] = $this->eventSchema;
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
        if (isset($map['concurrency'])) {
            $model->concurrency = $map['concurrency'];
        }

        if (isset($map['eventSchema'])) {
            $model->eventSchema = $map['eventSchema'];
        }

        return $model;
    }
}

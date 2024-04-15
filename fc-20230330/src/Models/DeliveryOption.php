<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class DeliveryOption extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $concurrency;

    /**
     * @example RawData
     *
     * @var string
     */
    public $eventSchema;
    protected $_name = [
        'concurrency' => 'concurrency',
        'eventSchema' => 'eventSchema',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeliveryOption
     */
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

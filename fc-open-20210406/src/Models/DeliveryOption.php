<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

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

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'concurrency' => 'concurrency',
        'eventSchema' => 'eventSchema',
        'mode'        => 'mode',
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
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
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
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class RdsTriggerConfig extends Model
{
    /**
     * @description concurrency
     *
     * @var int
     */
    public $concurrency;

    /**
     * @description eventFormat
     *
     * @var string
     */
    public $eventFormat;

    /**
     * @description retry
     *
     * @var int
     */
    public $retry;

    /**
     * @description subscriptionObjects
     *
     * @var string[]
     */
    public $subscriptionObjects;
    protected $_name = [
        'concurrency'         => 'concurrency',
        'eventFormat'         => 'eventFormat',
        'retry'               => 'retry',
        'subscriptionObjects' => 'subscriptionObjects',
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
        if (null !== $this->eventFormat) {
            $res['eventFormat'] = $this->eventFormat;
        }
        if (null !== $this->retry) {
            $res['retry'] = $this->retry;
        }
        if (null !== $this->subscriptionObjects) {
            $res['subscriptionObjects'] = $this->subscriptionObjects;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RdsTriggerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['concurrency'])) {
            $model->concurrency = $map['concurrency'];
        }
        if (isset($map['eventFormat'])) {
            $model->eventFormat = $map['eventFormat'];
        }
        if (isset($map['retry'])) {
            $model->retry = $map['retry'];
        }
        if (isset($map['subscriptionObjects'])) {
            if (!empty($map['subscriptionObjects'])) {
                $model->subscriptionObjects = $map['subscriptionObjects'];
            }
        }

        return $model;
    }
}

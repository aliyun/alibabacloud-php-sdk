<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerLogConfigRequest;

use AlibabaCloud\Dara\Model;

class accessLogTracingConfig extends Model
{
    /**
     * @var bool
     */
    public $tracingEnabled;

    /**
     * @var int
     */
    public $tracingSample;

    /**
     * @var string
     */
    public $tracingType;
    protected $_name = [
        'tracingEnabled' => 'TracingEnabled',
        'tracingSample' => 'TracingSample',
        'tracingType' => 'TracingType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tracingEnabled) {
            $res['TracingEnabled'] = $this->tracingEnabled;
        }

        if (null !== $this->tracingSample) {
            $res['TracingSample'] = $this->tracingSample;
        }

        if (null !== $this->tracingType) {
            $res['TracingType'] = $this->tracingType;
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
        if (isset($map['TracingEnabled'])) {
            $model->tracingEnabled = $map['TracingEnabled'];
        }

        if (isset($map['TracingSample'])) {
            $model->tracingSample = $map['TracingSample'];
        }

        if (isset($map['TracingType'])) {
            $model->tracingType = $map['TracingType'];
        }

        return $model;
    }
}

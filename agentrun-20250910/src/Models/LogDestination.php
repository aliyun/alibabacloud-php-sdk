<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class LogDestination extends Model
{
    /**
     * @var SLSLogDestination
     */
    public $slsLogDestination;
    protected $_name = [
        'slsLogDestination' => 'slsLogDestination',
    ];

    public function validate()
    {
        if (null !== $this->slsLogDestination) {
            $this->slsLogDestination->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slsLogDestination) {
            $res['slsLogDestination'] = null !== $this->slsLogDestination ? $this->slsLogDestination->toArray($noStream) : $this->slsLogDestination;
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
        if (isset($map['slsLogDestination'])) {
            $model->slsLogDestination = SLSLogDestination::fromMap($map['slsLogDestination']);
        }

        return $model;
    }
}

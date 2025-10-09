<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesResponseBody\pagingInfo\taskInstances;

use AlibabaCloud\Dara\Model;

class runtime extends Model
{
    /**
     * @var string
     */
    public $gateway;

    /**
     * @var string
     */
    public $processId;
    protected $_name = [
        'gateway' => 'Gateway',
        'processId' => 'ProcessId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
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
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        return $model;
    }
}

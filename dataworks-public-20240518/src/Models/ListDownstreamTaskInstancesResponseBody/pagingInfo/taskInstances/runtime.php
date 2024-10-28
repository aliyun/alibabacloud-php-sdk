<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTaskInstancesResponseBody\pagingInfo\taskInstances;

use AlibabaCloud\Tea\Model;

class runtime extends Model
{
    /**
     * @example cn-shanghai.1.2
     *
     * @var string
     */
    public $gateway;

    /**
     * @example T3_123
     *
     * @var string
     */
    public $processId;
    protected $_name = [
        'gateway'   => 'Gateway',
        'processId' => 'ProcessId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return runtime
     */
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

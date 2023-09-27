<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class AsyncResourcePlanOperationResult extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $message;

    /**
     * @example {\"ssgProfiles\":[{\"name\":\"default\",\"cpu\":1.13,\"heap\":\"1 gb\",\"offHeap\":\"32 mb\",\"managed\":{},\"extended\":{}}],\"nodes\":[{\"id\":1,\"type\":\"StreamExecTableSourceScan\",\"desc\":\"Source: datagen_source[78]\",\"profile\":{\"group\":\"default\",\"parallelism\":1,\"maxParallelism\":32768,\"minParallelism\":1}},{\"id\":2,\"type\":\"StreamExecSink\",\"desc\":\"Sink: blackhole_sink[79]\",\"profile\":{\"group\":\"default\",\"parallelism\":1,\"maxParallelism\":32768,\"minParallelism\":1}}],\"edges\":[{\"source\":1,\"target\":2,\"mode\":\"PIPELINED\",\"strategy\":\"FORWARD\"}],\"vertices\":{\"717c7b8afebbfb7137f6f0f99beb2a94\":[1,2]}}
     *
     * @var string
     */
    public $plan;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $ticketStatus;
    protected $_name = [
        'message'      => 'message',
        'plan'         => 'plan',
        'ticketStatus' => 'ticketStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->plan) {
            $res['plan'] = $this->plan;
        }
        if (null !== $this->ticketStatus) {
            $res['ticketStatus'] = $this->ticketStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsyncResourcePlanOperationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['plan'])) {
            $model->plan = $map['plan'];
        }
        if (isset($map['ticketStatus'])) {
            $model->ticketStatus = $map['ticketStatus'];
        }

        return $model;
    }
}

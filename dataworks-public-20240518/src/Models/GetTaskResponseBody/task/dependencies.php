<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task;

use AlibabaCloud\Tea\Model;

class dependencies extends Model
{
    /**
     * @example Normal
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $upstreamOutput;

    /**
     * @var string
     */
    public $upstreamTaskId;
    protected $_name = [
        'type'           => 'Type',
        'upstreamOutput' => 'UpstreamOutput',
        'upstreamTaskId' => 'UpstreamTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->upstreamOutput) {
            $res['UpstreamOutput'] = $this->upstreamOutput;
        }
        if (null !== $this->upstreamTaskId) {
            $res['UpstreamTaskId'] = $this->upstreamTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependencies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpstreamOutput'])) {
            $model->upstreamOutput = $map['UpstreamOutput'];
        }
        if (isset($map['UpstreamTaskId'])) {
            $model->upstreamTaskId = $map['UpstreamTaskId'];
        }

        return $model;
    }
}

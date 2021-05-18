<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class RestartOutboundTaskRequest extends Model
{
    /**
     * @var int
     */
    public $outboundTaskId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'outboundTaskId' => 'OutboundTaskId',
        'instanceId'     => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outboundTaskId) {
            $res['OutboundTaskId'] = $this->outboundTaskId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartOutboundTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutboundTaskId'])) {
            $model->outboundTaskId = $map['OutboundTaskId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

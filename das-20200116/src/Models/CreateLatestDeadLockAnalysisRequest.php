<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class CreateLatestDeadLockAnalysisRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pc-bp1u5mas9exx7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example pi-bp16v3824rt73****
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLatestDeadLockAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}

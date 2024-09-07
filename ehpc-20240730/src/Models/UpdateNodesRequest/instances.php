<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateNodesRequest;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The instance ID of the compute node.
     *
     * @example i-bp1bzqq1ddeemuddn****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether to enable deletion protection for the compute node.
     *
     * @example true
     *
     * @var bool
     */
    public $keepAlive;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'keepAlive'  => 'KeepAlive',
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
        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }

        return $model;
    }
}

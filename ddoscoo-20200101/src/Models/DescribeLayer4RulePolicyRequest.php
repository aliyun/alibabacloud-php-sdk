<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLayer4RulePolicyRequest extends Model
{
    /**
     * @description The port forwarding rule that you want to query.
     *
     * Each port forwarding rule contains the following fields:
     *
     *   **InstanceId**: the ID of the instance. This field is required and must be of the string type.
     *   **Protocol**: the forwarding protocol. This field is required and must be of the string type. Valid values: **tcp** and **udp**.
     *   **FrontendPort**: the forwarding port. This field is required and must be of the integer type.
     *
     * @example [{\"InstanceId\":\"ddosDip-sg-4hr2b3l****\",\"FrontendPort\":2020,\"Protocol\":\"udp\"}]
     *
     * @var string
     */
    public $listeners;
    protected $_name = [
        'listeners' => 'Listeners',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLayer4RulePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }

        return $model;
    }
}

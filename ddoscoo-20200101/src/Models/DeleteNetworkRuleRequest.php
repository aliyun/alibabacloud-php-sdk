<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkRuleRequest extends Model
{
    /**
     * @description An array that consists of the information about the port forwarding rule. This parameter is a JSON string. The string contains the following fields:
     *
     *   **InstanceId**: the ID of the instance. This field is required and must be of the STRING type.
     *   **Protocol**: the forwarding protocol. This field is required and must be of the STRING type. Valid values: **tcp** and **udp**.
     *   **FrontendPort**: the forwarding port. This field is required and must be of the INTEGER type.
     *
     * This parameter is required.
     * @example [{"InstanceId":"ddoscoo-cn-mp91j1ao****","Protocol":"tcp","FrontendPort":8080}]
     *
     * @var string
     */
    public $networkRule;
    protected $_name = [
        'networkRule' => 'NetworkRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkRule) {
            $res['NetworkRule'] = $this->networkRule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkRule'])) {
            $model->networkRule = $map['NetworkRule'];
        }

        return $model;
    }
}

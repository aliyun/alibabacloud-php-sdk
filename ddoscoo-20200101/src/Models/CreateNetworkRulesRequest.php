<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkRulesRequest extends Model
{
    /**
     * @description The details of the port forwarding rule. This parameter is a JSON string. The string contains the following fields:
     *
     *   **InstanceId**: the ID of the instance. This field is required and must be of the STRING type.
     *   **Protocol**: the forwarding protocol. This field is required and must be of the STRING type. Valid values: **tcp** and **udp**.
     *   **FrontendPort**: the forwarding port. This field is required and must be of the INTEGER type.
     *   **BackendPort**: the port of the origin server. This field is required and must be of the INTEGER type.
     *   **RealServers**: the IP addresses of the origin server. This field is required and must be a JSON array. You can specify up to 20 IP addresses.
     *
     * @example [{"InstanceId":"ddoscoo-cn-mp91j1ao****","Protocol":"tcp","FrontendPort":8080,"BackendPort":8080,"RealServers":["1.1.1.1","2.2.2.2"]}]
     *
     * @var string
     */
    public $networkRules;
    protected $_name = [
        'networkRules' => 'NetworkRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkRules) {
            $res['NetworkRules'] = $this->networkRules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkRules'])) {
            $model->networkRules = $map['NetworkRules'];
        }

        return $model;
    }
}

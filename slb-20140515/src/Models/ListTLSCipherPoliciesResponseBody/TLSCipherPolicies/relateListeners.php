<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody\TLSCipherPolicies;

use AlibabaCloud\Tea\Model;

class relateListeners extends Model
{
    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-bp1b6c719dfa08ex****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The listening port. Valid values: **1** to **65535**.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The listening protocol. Valid values:
     *
     *   **TCP**
     *   **UDP**
     *   **HTTP**
     *   **HTTPS**
     *
     * @example HTTPS
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'loadBalancerId' => 'LoadBalancerId',
        'port'           => 'Port',
        'protocol'       => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relateListeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}

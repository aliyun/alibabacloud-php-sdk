<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\ListTLSCipherPoliciesResponseBody\TLSCipherPolicies;

use AlibabaCloud\Tea\Model;

class relateListeners extends Model
{
    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'protocol'       => 'Protocol',
        'loadBalancerId' => 'LoadBalancerId',
        'port'           => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}

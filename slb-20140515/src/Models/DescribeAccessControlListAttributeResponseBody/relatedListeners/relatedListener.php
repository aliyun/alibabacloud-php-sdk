<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\relatedListeners;

use AlibabaCloud\Tea\Model;

class relatedListener extends Model
{
    /**
     * @description The type of ACL. Valid values:
     *
     *   **black**
     *   **white**
     *
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The frontend port of the listener with which the ACL is associated.
     *
     * @example 443
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The CLB instance ID.
     *
     * @example lb-bp13j********1miup
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The type of protocol that the associated listener uses.
     *
     * @example https
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'aclType'        => 'AclType',
        'listenerPort'   => 'ListenerPort',
        'loadBalancerId' => 'LoadBalancerId',
        'protocol'       => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedListener
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}

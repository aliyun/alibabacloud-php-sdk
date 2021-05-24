<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\relatedListeners;

use AlibabaCloud\Tea\Model;

class relatedListener extends Model
{
    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'listenerPort'   => 'ListenerPort',
        'aclType'        => 'AclType',
        'protocol'       => 'Protocol',
        'loadBalancerId' => 'LoadBalancerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
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
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}

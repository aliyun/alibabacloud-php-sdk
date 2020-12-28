<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class relatedListeners extends Model
{
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

    /**
     * @var int
     */
    public $listenerPort;
    protected $_name = [
        'aclType'        => 'AclType',
        'protocol'       => 'Protocol',
        'loadBalancerId' => 'LoadBalancerId',
        'listenerPort'   => 'ListenerPort',
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedListeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewaySlbRequest;

use AlibabaCloud\Tea\Model;

class VServiceList extends Model
{
    /**
     * @description The port number.
     *
     * @example 443
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol type. Valid values:
     *
     *   HTTP
     *   HTTPS
     *
     * @example HTTPS
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the virtual server group.
     *
     * @example rsp-bp1j**t0fyl**
     *
     * @var string
     */
    public $VServerGroupId;

    /**
     * @description The name of the virtual server group.
     *
     * @var string
     */
    public $VServerGroupName;
    protected $_name = [
        'port'             => 'Port',
        'protocol'         => 'Protocol',
        'VServerGroupId'   => 'VServerGroupId',
        'VServerGroupName' => 'VServerGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->VServerGroupName) {
            $res['VServerGroupName'] = $this->VServerGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VServiceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['VServerGroupName'])) {
            $model->VServerGroupName = $map['VServerGroupName'];
        }

        return $model;
    }
}

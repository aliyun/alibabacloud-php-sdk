<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class internetSlb extends Model
{
    /**
     * @description The mode of the SLB instance.
     *
     * @example UserHost
     *
     * @var string
     */
    public $gatewaySlbMode;

    /**
     * @description The status of the SLB instance.
     *
     * @example Ready
     *
     * @var string
     */
    public $gatewaySlbStatus;

    /**
     * @description The traffic of the gateway.
     *
     * @example 20
     *
     * @var string
     */
    public $internetNetworkFlow;

    /**
     * @description SLB ID.
     *
     * @example lb-bp1ut8asdfgucjk****
     *
     * @var string
     */
    public $slbId;

    /**
     * @description SLB IP.
     *
     * @example 153.12.XX.XX
     *
     * @var string
     */
    public $slbIp;

    /**
     * @description The port number of the SLB instance.
     *
     * @example slb.s2.small
     *
     * @var string
     */
    public $slbPort;

    /**
     * @description The specifications of the SLB instance.
     *
     * @example slb.s2.small
     *
     * @var string
     */
    public $slbSpec;

    /**
     * @description The description of the status.
     *
     * @example Creating
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description The type.
     *
     * @example PUB_NET
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'gatewaySlbMode'      => 'GatewaySlbMode',
        'gatewaySlbStatus'    => 'GatewaySlbStatus',
        'internetNetworkFlow' => 'InternetNetworkFlow',
        'slbId'               => 'SlbId',
        'slbIp'               => 'SlbIp',
        'slbPort'             => 'SlbPort',
        'slbSpec'             => 'SlbSpec',
        'statusDesc'          => 'StatusDesc',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewaySlbMode) {
            $res['GatewaySlbMode'] = $this->gatewaySlbMode;
        }
        if (null !== $this->gatewaySlbStatus) {
            $res['GatewaySlbStatus'] = $this->gatewaySlbStatus;
        }
        if (null !== $this->internetNetworkFlow) {
            $res['InternetNetworkFlow'] = $this->internetNetworkFlow;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }
        if (null !== $this->slbPort) {
            $res['SlbPort'] = $this->slbPort;
        }
        if (null !== $this->slbSpec) {
            $res['SlbSpec'] = $this->slbSpec;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internetSlb
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewaySlbMode'])) {
            $model->gatewaySlbMode = $map['GatewaySlbMode'];
        }
        if (isset($map['GatewaySlbStatus'])) {
            $model->gatewaySlbStatus = $map['GatewaySlbStatus'];
        }
        if (isset($map['InternetNetworkFlow'])) {
            $model->internetNetworkFlow = $map['InternetNetworkFlow'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }
        if (isset($map['SlbPort'])) {
            $model->slbPort = $map['SlbPort'];
        }
        if (isset($map['SlbSpec'])) {
            $model->slbSpec = $map['SlbSpec'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

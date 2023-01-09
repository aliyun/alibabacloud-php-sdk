<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy;
use AlibabaCloud\Tea\Model;

class portTrafficPolicyList extends Model
{
    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-2837hfd91h34dbg87364g*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The creation time.
     *
     * @example 1667460287386
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 1667460287386
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the port configuration.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the service.
     *
     * @example 1
     *
     * @var int
     */
    public $serviceId;

    /**
     * @description The service port number.
     *
     * @example 8080
     *
     * @var int
     */
    public $servicePort;

    /**
     * @description The traffic policy.
     *
     * @var TrafficPolicy
     */
    public $trafficPolicy;
    protected $_name = [
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'serviceId'       => 'ServiceId',
        'servicePort'     => 'ServicePort',
        'trafficPolicy'   => 'TrafficPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }
        if (null !== $this->trafficPolicy) {
            $res['TrafficPolicy'] = null !== $this->trafficPolicy ? $this->trafficPolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portTrafficPolicyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }
        if (isset($map['TrafficPolicy'])) {
            $model->trafficPolicy = TrafficPolicy::fromMap($map['TrafficPolicy']);
        }

        return $model;
    }
}

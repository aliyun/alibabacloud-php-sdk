<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy;

class portTrafficPolicyList extends Model
{
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $serviceId;
    /**
     * @var int
     */
    public $servicePort;
    /**
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
        if (null !== $this->trafficPolicy) {
            $this->trafficPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TrafficPolicy'] = null !== $this->trafficPolicy ? $this->trafficPolicy->toArray($noStream) : $this->trafficPolicy;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

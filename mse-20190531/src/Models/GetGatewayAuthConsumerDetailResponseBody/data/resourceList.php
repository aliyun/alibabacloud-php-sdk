<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthConsumerDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @description The consumer ID.
     *
     * @example 123
     *
     * @var int
     */
    public $consumerId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-4822033a8513496fa10f05c934f*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The time when the resource associated with the consumer authentication record was created.
     *
     * @example 2022-12-06 01:38:03
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the resource associated with the consumer authentication record was modified.
     *
     * @example 2022-12-06 01:38:03
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the authorized resource for the consumer.
     *
     * @example 16
     *
     * @var int
     */
    public $id;

    /**
     * @description The resource authorization state. Valid values:
     *
     *   true: Resource authorization is enabled.
     *   false: Resource authorization is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $resourceStatus;

    /**
     * @description The ID of the route.
     *
     * @example 3458
     *
     * @var int
     */
    public $routeId;

    /**
     * @description The name of the route.
     *
     * @example test
     *
     * @var string
     */
    public $routeName;
    protected $_name = [
        'consumerId'      => 'ConsumerId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'resourceStatus'  => 'ResourceStatus',
        'routeId'         => 'RouteId',
        'routeName'       => 'RouteName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }
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
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }
        if (null !== $this->routeName) {
            $res['RouteName'] = $this->routeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerId'])) {
            $model->consumerId = $map['ConsumerId'];
        }
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
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }
        if (isset($map['RouteName'])) {
            $model->routeName = $map['RouteName'];
        }

        return $model;
    }
}

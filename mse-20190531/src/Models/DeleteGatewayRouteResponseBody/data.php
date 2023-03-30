<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayRouteResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The default service ID.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultServiceId;

    /**
     * @description The ID of the gateway.
     *
     * @example 125
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-5017305290e14cebbrvec4a5****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The creation time.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 2021-12-30T06:41:52.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID.
     *
     * @example 12
     *
     * @var int
     */
    public $id;

    /**
     * @description The name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The matching rules.
     *
     * @example {\"PathPredicates\":{\"Path\":\"/metas\",\"Type\":\"PRE\",\"IgnoreCase\":false}}
     *
     * @var string
     */
    public $predicates;

    /**
     * @description The sequence number of the route.
     *
     * @example 1
     *
     * @var int
     */
    public $routeOrder;

    /**
     * @description The status of the route. Valid values:
     *
     *   0: unpublished
     *   2: publishing
     *   3: published
     *   4: editing (updated but not published)
     *   5: unpublishing
     *   6: unavailable
     *
     * @example 2
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'defaultServiceId' => 'DefaultServiceId',
        'gatewayId'        => 'GatewayId',
        'gatewayUniqueId'  => 'GatewayUniqueId',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'id'               => 'Id',
        'name'             => 'Name',
        'predicates'       => 'Predicates',
        'routeOrder'       => 'RouteOrder',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultServiceId) {
            $res['DefaultServiceId'] = $this->defaultServiceId;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->predicates) {
            $res['Predicates'] = $this->predicates;
        }
        if (null !== $this->routeOrder) {
            $res['RouteOrder'] = $this->routeOrder;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultServiceId'])) {
            $model->defaultServiceId = $map['DefaultServiceId'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Predicates'])) {
            $model->predicates = $map['Predicates'];
        }
        if (isset($map['RouteOrder'])) {
            $model->routeOrder = $map['RouteOrder'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

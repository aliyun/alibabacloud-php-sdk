<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\matchRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations;
use AlibabaCloud\Tea\Model;

class routeDetail extends Model
{
    /**
     * @var string[]
     */
    public $domains;

    /**
     * @description The advanced settings for routing HTTP traffic.
     *
     * @var HTTPAdvancedOptions
     */
    public $HTTPAdvancedOptions;

    /**
     * @description If the value is true, the original YAML file contains features that are not supported on the current interface.
     *
     * @example true
     *
     * @var bool
     */
    public $hasUnsafeFeatures;

    /**
     * @description The matching rules for traffic routing.
     *
     * @var matchRequest
     */
    public $matchRequest;

    /**
     * @description The original YAML file of the virtual service that is serialized into a JSON string.
     *
     * @example {}
     *
     * @var string
     */
    public $rawVSRoute;

    /**
     * @description The endpoints of destination services for Layer 4 weighted routing.
     *
     * @var routeDestinations[]
     */
    public $routeDestinations;

    /**
     * @description The name of the routing rule.
     *
     * @example demo-route
     *
     * @var string
     */
    public $routeName;

    /**
     * @description The type of the traffic to be routed. Valid values: `HTTP`, `TLS`, and `TCP`.
     *
     * @example HTTP
     *
     * @var string
     */
    public $routeType;
    protected $_name = [
        'domains'             => 'Domains',
        'HTTPAdvancedOptions' => 'HTTPAdvancedOptions',
        'hasUnsafeFeatures'   => 'HasUnsafeFeatures',
        'matchRequest'        => 'MatchRequest',
        'rawVSRoute'          => 'RawVSRoute',
        'routeDestinations'   => 'RouteDestinations',
        'routeName'           => 'RouteName',
        'routeType'           => 'RouteType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->HTTPAdvancedOptions) {
            $res['HTTPAdvancedOptions'] = null !== $this->HTTPAdvancedOptions ? $this->HTTPAdvancedOptions->toMap() : null;
        }
        if (null !== $this->hasUnsafeFeatures) {
            $res['HasUnsafeFeatures'] = $this->hasUnsafeFeatures;
        }
        if (null !== $this->matchRequest) {
            $res['MatchRequest'] = null !== $this->matchRequest ? $this->matchRequest->toMap() : null;
        }
        if (null !== $this->rawVSRoute) {
            $res['RawVSRoute'] = $this->rawVSRoute;
        }
        if (null !== $this->routeDestinations) {
            $res['RouteDestinations'] = [];
            if (null !== $this->routeDestinations && \is_array($this->routeDestinations)) {
                $n = 0;
                foreach ($this->routeDestinations as $item) {
                    $res['RouteDestinations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeName) {
            $res['RouteName'] = $this->routeName;
        }
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }
        if (isset($map['HTTPAdvancedOptions'])) {
            $model->HTTPAdvancedOptions = HTTPAdvancedOptions::fromMap($map['HTTPAdvancedOptions']);
        }
        if (isset($map['HasUnsafeFeatures'])) {
            $model->hasUnsafeFeatures = $map['HasUnsafeFeatures'];
        }
        if (isset($map['MatchRequest'])) {
            $model->matchRequest = matchRequest::fromMap($map['MatchRequest']);
        }
        if (isset($map['RawVSRoute'])) {
            $model->rawVSRoute = $map['RawVSRoute'];
        }
        if (isset($map['RouteDestinations'])) {
            if (!empty($map['RouteDestinations'])) {
                $model->routeDestinations = [];
                $n                        = 0;
                foreach ($map['RouteDestinations'] as $item) {
                    $model->routeDestinations[$n++] = null !== $item ? routeDestinations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RouteName'])) {
            $model->routeName = $map['RouteName'];
        }
        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }

        return $model;
    }
}

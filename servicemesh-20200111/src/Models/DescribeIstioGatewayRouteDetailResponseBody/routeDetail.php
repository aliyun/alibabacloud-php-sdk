<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\matchRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations;

class routeDetail extends Model
{
    /**
     * @var string[]
     */
    public $domains;

    /**
     * @var HTTPAdvancedOptions
     */
    public $HTTPAdvancedOptions;

    /**
     * @var bool
     */
    public $hasUnsafeFeatures;

    /**
     * @var matchRequest
     */
    public $matchRequest;

    /**
     * @var string
     */
    public $rawVSRoute;

    /**
     * @var routeDestinations[]
     */
    public $routeDestinations;

    /**
     * @var string
     */
    public $routeName;

    /**
     * @var string
     */
    public $routeType;
    protected $_name = [
        'domains' => 'Domains',
        'HTTPAdvancedOptions' => 'HTTPAdvancedOptions',
        'hasUnsafeFeatures' => 'HasUnsafeFeatures',
        'matchRequest' => 'MatchRequest',
        'rawVSRoute' => 'RawVSRoute',
        'routeDestinations' => 'RouteDestinations',
        'routeName' => 'RouteName',
        'routeType' => 'RouteType',
    ];

    public function validate()
    {
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        if (null !== $this->HTTPAdvancedOptions) {
            $this->HTTPAdvancedOptions->validate();
        }
        if (null !== $this->matchRequest) {
            $this->matchRequest->validate();
        }
        if (\is_array($this->routeDestinations)) {
            Model::validateArray($this->routeDestinations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['Domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['Domains'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->HTTPAdvancedOptions) {
            $res['HTTPAdvancedOptions'] = null !== $this->HTTPAdvancedOptions ? $this->HTTPAdvancedOptions->toArray($noStream) : $this->HTTPAdvancedOptions;
        }

        if (null !== $this->hasUnsafeFeatures) {
            $res['HasUnsafeFeatures'] = $this->hasUnsafeFeatures;
        }

        if (null !== $this->matchRequest) {
            $res['MatchRequest'] = null !== $this->matchRequest ? $this->matchRequest->toArray($noStream) : $this->matchRequest;
        }

        if (null !== $this->rawVSRoute) {
            $res['RawVSRoute'] = $this->rawVSRoute;
        }

        if (null !== $this->routeDestinations) {
            if (\is_array($this->routeDestinations)) {
                $res['RouteDestinations'] = [];
                $n1 = 0;
                foreach ($this->routeDestinations as $item1) {
                    $res['RouteDestinations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n1 = 0;
                foreach ($map['Domains'] as $item1) {
                    $model->domains[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['RouteDestinations'] as $item1) {
                    $model->routeDestinations[$n1] = routeDestinations::fromMap($item1);
                    ++$n1;
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

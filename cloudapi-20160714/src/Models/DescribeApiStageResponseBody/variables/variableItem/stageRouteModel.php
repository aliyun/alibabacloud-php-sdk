<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponseBody\variables\variableItem;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponseBody\variables\variableItem\stageRouteModel\routeRules;
use AlibabaCloud\Tea\Model;

class stageRouteModel extends Model
{
    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $parameterCatalog;

    /**
     * @var string
     */
    public $parameterType;

    /**
     * @var string
     */
    public $routeMatchSymbol;

    /**
     * @var routeRules
     */
    public $routeRules;

    /**
     * @var string
     */
    public $serviceParameterName;
    protected $_name = [
        'location'             => 'Location',
        'parameterCatalog'     => 'ParameterCatalog',
        'parameterType'        => 'ParameterType',
        'routeMatchSymbol'     => 'RouteMatchSymbol',
        'routeRules'           => 'RouteRules',
        'serviceParameterName' => 'ServiceParameterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->parameterCatalog) {
            $res['ParameterCatalog'] = $this->parameterCatalog;
        }
        if (null !== $this->parameterType) {
            $res['ParameterType'] = $this->parameterType;
        }
        if (null !== $this->routeMatchSymbol) {
            $res['RouteMatchSymbol'] = $this->routeMatchSymbol;
        }
        if (null !== $this->routeRules) {
            $res['RouteRules'] = null !== $this->routeRules ? $this->routeRules->toMap() : null;
        }
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageRouteModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ParameterCatalog'])) {
            $model->parameterCatalog = $map['ParameterCatalog'];
        }
        if (isset($map['ParameterType'])) {
            $model->parameterType = $map['ParameterType'];
        }
        if (isset($map['RouteMatchSymbol'])) {
            $model->routeMatchSymbol = $map['RouteMatchSymbol'];
        }
        if (isset($map['RouteRules'])) {
            $model->routeRules = routeRules::fromMap($map['RouteRules']);
        }
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }

        return $model;
    }
}

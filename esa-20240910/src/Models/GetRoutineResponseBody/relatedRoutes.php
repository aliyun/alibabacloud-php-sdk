<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody;

use AlibabaCloud\Tea\Model;

class relatedRoutes extends Model
{
    /**
     * @var string
     */
    public $byPass;

    /**
     * @description The route.
     *
     * @example *.example.com/path1*
     *
     * @var string
     */
    public $route;

    /**
     * @description The route ID.
     *
     * @example d501cb8a2c951f32922d260040780c06
     *
     * @var string
     */
    public $routeId;

    /**
     * @description The website ID.
     *
     * @example 54362329990032
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The website name.
     *
     * @example example.com
     *
     * @var string
     */
    public $siteName;
    protected $_name = [
        'byPass'   => 'ByPass',
        'route'    => 'Route',
        'routeId'  => 'RouteId',
        'siteId'   => 'SiteId',
        'siteName' => 'SiteName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->byPass) {
            $res['ByPass'] = $this->byPass;
        }
        if (null !== $this->route) {
            $res['Route'] = $this->route;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedRoutes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ByPass'])) {
            $model->byPass = $map['ByPass'];
        }
        if (isset($map['Route'])) {
            $model->route = $map['Route'];
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        return $model;
    }
}

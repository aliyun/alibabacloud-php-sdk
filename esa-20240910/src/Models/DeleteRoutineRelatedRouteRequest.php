<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteRoutineRelatedRouteRequest extends Model
{
    /**
     * @description The routine name.
     *
     * This parameter is required.
     *
     * @example DeleteRoutineRelatedRoute
     *
     * @var string
     */
    public $name;

    /**
     * @description The route URL.
     *
     * This parameter is required.
     *
     * @example *.example.com/path1*
     *
     * @var string
     */
    public $route;

    /**
     * @description The route ID.
     *
     * This parameter is required.
     *
     * @example 0c3b82a3d1524e9f750da11d0cc0be0a
     *
     * @var string
     */
    public $routeId;

    /**
     * @description The website ID.
     *
     * This parameter is required.
     *
     * @example 54362329990032
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'name' => 'Name',
        'route' => 'Route',
        'routeId' => 'RouteId',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRoutineRelatedRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        return $model;
    }
}

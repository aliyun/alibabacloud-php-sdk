<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody;

use AlibabaCloud\Dara\Model;

class relatedRoutes extends Model
{
    /**
     * @var string
     */
    public $byPass;
    /**
     * @var string
     */
    public $route;
    /**
     * @var string
     */
    public $routeId;
    /**
     * @var int
     */
    public $siteId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateRoutineRelatedRouteRequest extends Model
{
    /**
     * @description The routine name.
     *
     * @example CreateRoutineRelatedRoute
     *
     * @var string
     */
    public $name;

    /**
     * @description The route.
     *
     * @example *.example.com/path1*
     *
     * @var string
     */
    public $route;

    /**
     * @description The website ID.
     *
     * @example 54362329990032
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'name'   => 'Name',
        'route'  => 'Route',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->route) {
            $res['Route'] = $this->route;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoutineRelatedRouteRequest
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}

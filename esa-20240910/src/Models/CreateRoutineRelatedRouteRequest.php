<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateRoutineRelatedRouteRequest extends Model
{
    /**
     * @var string
     */
    public $byPass;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $route;
    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'byPass' => 'ByPass',
        'name'   => 'Name',
        'route'  => 'Route',
        'siteId' => 'SiteId',
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

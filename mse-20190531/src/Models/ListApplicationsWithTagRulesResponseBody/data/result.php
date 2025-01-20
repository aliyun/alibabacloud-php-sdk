<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result\routeRules;

class result extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var routeRules[]
     */
    public $routeRules;
    /**
     * @var int
     */
    public $routeStatus;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'namespace'   => 'Namespace',
        'routeRules'  => 'RouteRules',
        'routeStatus' => 'RouteStatus',
    ];

    public function validate()
    {
        if (\is_array($this->routeRules)) {
            Model::validateArray($this->routeRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->routeRules) {
            if (\is_array($this->routeRules)) {
                $res['RouteRules'] = [];
                $n1                = 0;
                foreach ($this->routeRules as $item1) {
                    $res['RouteRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->routeStatus) {
            $res['RouteStatus'] = $this->routeStatus;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RouteRules'])) {
            if (!empty($map['RouteRules'])) {
                $model->routeRules = [];
                $n1                = 0;
                foreach ($map['RouteRules'] as $item1) {
                    $model->routeRules[$n1++] = routeRules::fromMap($item1);
                }
            }
        }

        if (isset($map['RouteStatus'])) {
            $model->routeStatus = $map['RouteStatus'];
        }

        return $model;
    }
}

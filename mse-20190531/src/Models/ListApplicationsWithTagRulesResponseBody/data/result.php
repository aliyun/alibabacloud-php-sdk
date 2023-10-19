<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result\routeRules;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The application ID.
     *
     * @example daqijp6c31@xxx
     *
     * @var string
     */
    public $appId;

    /**
     * @description The application name.
     *
     * @example service-lottery-core
     *
     * @var string
     */
    public $appName;

    /**
     * @description The MSE namespace to which the application belongs.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The queried rules.
     *
     * @var routeRules[]
     */
    public $routeRules;

    /**
     * @description The route state. Valid values:
     *
     *   0: disabled
     *   1: enabled
     *
     * @example 1
     *
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
    }

    public function toMap()
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
            $res['RouteRules'] = [];
            if (null !== $this->routeRules && \is_array($this->routeRules)) {
                $n = 0;
                foreach ($this->routeRules as $item) {
                    $res['RouteRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeStatus) {
            $res['RouteStatus'] = $this->routeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
                $n                 = 0;
                foreach ($map['RouteRules'] as $item) {
                    $model->routeRules[$n++] = null !== $item ? routeRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RouteStatus'])) {
            $model->routeStatus = $map['RouteStatus'];
        }

        return $model;
    }
}

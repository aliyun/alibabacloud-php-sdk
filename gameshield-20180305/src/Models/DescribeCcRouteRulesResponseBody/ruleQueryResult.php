<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcRouteRulesResponseBody;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcRouteRulesResponseBody\ruleQueryResult\routeRules;
use AlibabaCloud\Tea\Model;

class ruleQueryResult extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var routeRules[]
     */
    public $routeRules;

    /**
     * @var string
     */
    public $bizId;
    protected $_name = [
        'appId'      => 'AppId',
        'routeRules' => 'RouteRules',
        'bizId'      => 'BizId',
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
        if (null !== $this->routeRules) {
            $res['RouteRules'] = [];
            if (null !== $this->routeRules && \is_array($this->routeRules)) {
                $n = 0;
                foreach ($this->routeRules as $item) {
                    $res['RouteRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleQueryResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        return $model;
    }
}

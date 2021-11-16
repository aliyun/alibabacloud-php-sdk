<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class EnableRouteRuleRequest extends Model
{
    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 规则ID
     *
     * @var int
     */
    public $routeRuleId;
    protected $_name = [
        'clientToken' => 'clientToken',
        'routeRuleId' => 'routeRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->routeRuleId) {
            $res['routeRuleId'] = $this->routeRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableRouteRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['routeRuleId'])) {
            $model->routeRuleId = $map['routeRuleId'];
        }

        return $model;
    }
}

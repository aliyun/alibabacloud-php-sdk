<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class DeleteRouteRuleRequest extends Model
{
    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 10000
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
     * @return DeleteRouteRuleRequest
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

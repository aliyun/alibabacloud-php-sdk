<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRouteRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $routeRuleId;
    protected $_name = [
        'routeRuleId' => 'routeRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeRuleId) {
            $res['routeRuleId'] = $this->routeRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['routeRuleId'])) {
            $model->routeRuleId = $map['routeRuleId'];
        }

        return $model;
    }
}

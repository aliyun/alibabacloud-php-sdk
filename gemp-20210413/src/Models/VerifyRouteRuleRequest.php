<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\VerifyRouteRuleRequest\testSourceEvents;
use AlibabaCloud\Tea\Model;

class VerifyRouteRuleRequest extends Model
{
    /**
     * @example 1111
     *
     * @var int
     */
    public $routeRuleId;

    /**
     * @var testSourceEvents[]
     */
    public $testSourceEvents;
    protected $_name = [
        'routeRuleId'      => 'routeRuleId',
        'testSourceEvents' => 'testSourceEvents',
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
        if (null !== $this->testSourceEvents) {
            $res['testSourceEvents'] = [];
            if (null !== $this->testSourceEvents && \is_array($this->testSourceEvents)) {
                $n = 0;
                foreach ($this->testSourceEvents as $item) {
                    $res['testSourceEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyRouteRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['routeRuleId'])) {
            $model->routeRuleId = $map['routeRuleId'];
        }
        if (isset($map['testSourceEvents'])) {
            if (!empty($map['testSourceEvents'])) {
                $model->testSourceEvents = [];
                $n                       = 0;
                foreach ($map['testSourceEvents'] as $item) {
                    $model->testSourceEvents[$n++] = null !== $item ? testSourceEvents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

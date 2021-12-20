<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketWebsiteResponseBody;

use AlibabaCloud\SDK\Oss\V20190517\Models\RoutingRule;
use AlibabaCloud\Tea\Model;

class routingRules extends Model
{
    /**
     * @var RoutingRule[]
     */
    public $routingRules;
    protected $_name = [
        'routingRules' => 'RoutingRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routingRules) {
            $res['RoutingRule'] = [];
            if (null !== $this->routingRules && \is_array($this->routingRules)) {
                $n = 0;
                foreach ($this->routingRules as $item) {
                    $res['RoutingRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routingRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoutingRule'])) {
            if (!empty($map['RoutingRule'])) {
                $model->routingRules = [];
                $n                   = 0;
                foreach ($map['RoutingRule'] as $item) {
                    $model->routingRules[$n++] = null !== $item ? RoutingRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

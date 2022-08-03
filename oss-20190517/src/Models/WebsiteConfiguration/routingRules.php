<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\WebsiteConfiguration;

use AlibabaCloud\SDK\Oss\V20190517\Models\RoutingRule;
use AlibabaCloud\Tea\Model;

class routingRules extends Model
{
    /**
     * @var RoutingRule[]
     */
    public $routingRule;
    protected $_name = [
        'routingRule' => 'RoutingRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routingRule) {
            $res['RoutingRule'] = [];
            if (null !== $this->routingRule && \is_array($this->routingRule)) {
                $n = 0;
                foreach ($this->routingRule as $item) {
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
                $model->routingRule = [];
                $n                  = 0;
                foreach ($map['RoutingRule'] as $item) {
                    $model->routingRule[$n++] = null !== $item ? RoutingRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

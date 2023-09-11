<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListNetworkRulesResponseBody;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListNetworkRulesResponseBody\networkRules\networkRule;
use AlibabaCloud\Tea\Model;

class networkRules extends Model
{
    /**
     * @var networkRule[]
     */
    public $networkRule;
    protected $_name = [
        'networkRule' => 'NetworkRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkRule) {
            $res['NetworkRule'] = [];
            if (null !== $this->networkRule && \is_array($this->networkRule)) {
                $n = 0;
                foreach ($this->networkRule as $item) {
                    $res['NetworkRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkRule'])) {
            if (!empty($map['NetworkRule'])) {
                $model->networkRule = [];
                $n                  = 0;
                foreach ($map['NetworkRule'] as $item) {
                    $model->networkRule[$n++] = null !== $item ? networkRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

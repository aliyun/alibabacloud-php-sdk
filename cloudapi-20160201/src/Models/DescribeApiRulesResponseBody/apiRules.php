<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiRulesResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiRulesResponseBody\apiRules\apiRule;
use AlibabaCloud\Tea\Model;

class apiRules extends Model
{
    /**
     * @var apiRule[]
     */
    public $apiRule;
    protected $_name = [
        'apiRule' => 'ApiRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiRule) {
            $res['ApiRule'] = [];
            if (null !== $this->apiRule && \is_array($this->apiRule)) {
                $n = 0;
                foreach ($this->apiRule as $item) {
                    $res['ApiRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiRule'])) {
            if (!empty($map['ApiRule'])) {
                $model->apiRule = [];
                $n              = 0;
                foreach ($map['ApiRule'] as $item) {
                    $model->apiRule[$n++] = null !== $item ? apiRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

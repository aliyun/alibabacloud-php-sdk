<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopResourceResponseBody\ruleHitsTopResource;
use AlibabaCloud\Tea\Model;

class DescribeRuleHitsTopResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleHitsTopResource[]
     */
    public $ruleHitsTopResource;
    protected $_name = [
        'requestId'           => 'RequestId',
        'ruleHitsTopResource' => 'RuleHitsTopResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleHitsTopResource) {
            $res['RuleHitsTopResource'] = [];
            if (null !== $this->ruleHitsTopResource && \is_array($this->ruleHitsTopResource)) {
                $n = 0;
                foreach ($this->ruleHitsTopResource as $item) {
                    $res['RuleHitsTopResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleHitsTopResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleHitsTopResource'])) {
            if (!empty($map['RuleHitsTopResource'])) {
                $model->ruleHitsTopResource = [];
                $n                          = 0;
                foreach ($map['RuleHitsTopResource'] as $item) {
                    $model->ruleHitsTopResource[$n++] = null !== $item ? ruleHitsTopResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

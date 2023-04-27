<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopResourceResponseBody\ruleHitsTopResource;
use AlibabaCloud\Tea\Model;

class DescribeFlowTopResourceResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 8F0E0B9A-B518-5C6D-BEFC-A373DDE4F652
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The array of the top 10 protected objects that receive requests.
     *
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
     * @return DescribeFlowTopResourceResponseBody
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUrlResponseBody\ruleHitsTopUrl;
use AlibabaCloud\Tea\Model;

class DescribeRuleHitsTopUrlResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 3D8AF43B-08EB-51CE-B33A-93AA****9B0C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The top 10 URLs that match protection rules.
     *
     * @var ruleHitsTopUrl[]
     */
    public $ruleHitsTopUrl;
    protected $_name = [
        'requestId'      => 'RequestId',
        'ruleHitsTopUrl' => 'RuleHitsTopUrl',
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
        if (null !== $this->ruleHitsTopUrl) {
            $res['RuleHitsTopUrl'] = [];
            if (null !== $this->ruleHitsTopUrl && \is_array($this->ruleHitsTopUrl)) {
                $n = 0;
                foreach ($this->ruleHitsTopUrl as $item) {
                    $res['RuleHitsTopUrl'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleHitsTopUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleHitsTopUrl'])) {
            if (!empty($map['RuleHitsTopUrl'])) {
                $model->ruleHitsTopUrl = [];
                $n                     = 0;
                foreach ($map['RuleHitsTopUrl'] as $item) {
                    $model->ruleHitsTopUrl[$n++] = null !== $item ? ruleHitsTopUrl::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopUrlResponseBody\ruleHitsTopUrl;
use AlibabaCloud\Tea\Model;

class DescribeFlowTopUrlResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 520D4E4C-B8EC-5602-ACB6-4D378ACBA28D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The array of the top 10 URLs that are used to initiate requests.
     *
     * @var ruleHitsTopUrl[]
     */
    public $ruleHitsTopUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleHitsTopUrl' => 'RuleHitsTopUrl',
    ];

    public function validate() {}

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
     * @return DescribeFlowTopUrlResponseBody
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
                $n = 0;
                foreach ($map['RuleHitsTopUrl'] as $item) {
                    $model->ruleHitsTopUrl[$n++] = null !== $item ? ruleHitsTopUrl::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

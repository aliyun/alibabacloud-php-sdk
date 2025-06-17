<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopUrlResponseBody\ruleHitsTopUrl;

class DescribeFlowTopUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleHitsTopUrl[]
     */
    public $ruleHitsTopUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleHitsTopUrl' => 'RuleHitsTopUrl',
    ];

    public function validate()
    {
        if (\is_array($this->ruleHitsTopUrl)) {
            Model::validateArray($this->ruleHitsTopUrl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleHitsTopUrl) {
            if (\is_array($this->ruleHitsTopUrl)) {
                $res['RuleHitsTopUrl'] = [];
                $n1 = 0;
                foreach ($this->ruleHitsTopUrl as $item1) {
                    $res['RuleHitsTopUrl'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleHitsTopUrl'])) {
            if (!empty($map['RuleHitsTopUrl'])) {
                $model->ruleHitsTopUrl = [];
                $n1 = 0;
                foreach ($map['RuleHitsTopUrl'] as $item1) {
                    $model->ruleHitsTopUrl[$n1] = ruleHitsTopUrl::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

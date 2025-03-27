<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopResourceResponseBody\ruleHitsTopResource;

class DescribeFlowTopResourceResponseBody extends Model
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
        'requestId' => 'RequestId',
        'ruleHitsTopResource' => 'RuleHitsTopResource',
    ];

    public function validate()
    {
        if (\is_array($this->ruleHitsTopResource)) {
            Model::validateArray($this->ruleHitsTopResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleHitsTopResource) {
            if (\is_array($this->ruleHitsTopResource)) {
                $res['RuleHitsTopResource'] = [];
                $n1 = 0;
                foreach ($this->ruleHitsTopResource as $item1) {
                    $res['RuleHitsTopResource'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RuleHitsTopResource'])) {
            if (!empty($map['RuleHitsTopResource'])) {
                $model->ruleHitsTopResource = [];
                $n1 = 0;
                foreach ($map['RuleHitsTopResource'] as $item1) {
                    $model->ruleHitsTopResource[$n1++] = ruleHitsTopResource::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

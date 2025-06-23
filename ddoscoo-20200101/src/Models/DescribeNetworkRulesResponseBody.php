<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRulesResponseBody\networkRules;

class DescribeNetworkRulesResponseBody extends Model
{
    /**
     * @var networkRules[]
     */
    public $networkRules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'networkRules' => 'NetworkRules',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->networkRules)) {
            Model::validateArray($this->networkRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkRules) {
            if (\is_array($this->networkRules)) {
                $res['NetworkRules'] = [];
                $n1 = 0;
                foreach ($this->networkRules as $item1) {
                    $res['NetworkRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['NetworkRules'])) {
            if (!empty($map['NetworkRules'])) {
                $model->networkRules = [];
                $n1 = 0;
                foreach ($map['NetworkRules'] as $item1) {
                    $model->networkRules[$n1] = networkRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

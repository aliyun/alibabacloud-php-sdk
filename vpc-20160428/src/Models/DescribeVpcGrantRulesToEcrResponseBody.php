<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcGrantRulesToEcrResponseBody\grantRuleModels;

class DescribeVpcGrantRulesToEcrResponseBody extends Model
{
    /**
     * @var grantRuleModels[]
     */
    public $grantRuleModels;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'grantRuleModels' => 'GrantRuleModels',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->grantRuleModels)) {
            Model::validateArray($this->grantRuleModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantRuleModels) {
            if (\is_array($this->grantRuleModels)) {
                $res['GrantRuleModels'] = [];
                $n1 = 0;
                foreach ($this->grantRuleModels as $item1) {
                    $res['GrantRuleModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['GrantRuleModels'])) {
            if (!empty($map['GrantRuleModels'])) {
                $model->grantRuleModels = [];
                $n1 = 0;
                foreach ($map['GrantRuleModels'] as $item1) {
                    $model->grantRuleModels[$n1] = grantRuleModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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

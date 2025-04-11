<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToResourceResponseBody\grantRules;

class DescribeGrantRulesToResourceResponseBody extends Model
{
    /**
     * @var grantRules[]
     */
    public $grantRules;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'grantRules' => 'GrantRules',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->grantRules)) {
            Model::validateArray($this->grantRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantRules) {
            if (\is_array($this->grantRules)) {
                $res['GrantRules'] = [];
                $n1 = 0;
                foreach ($this->grantRules as $item1) {
                    $res['GrantRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (isset($map['GrantRules'])) {
            if (!empty($map['GrantRules'])) {
                $model->grantRules = [];
                $n1 = 0;
                foreach ($map['GrantRules'] as $item1) {
                    $model->grantRules[$n1++] = grantRules::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyRuleGroupsResponseBody\egressProxyRuleGroups;

class ListEgressProxyRuleGroupsResponseBody extends Model
{
    /**
     * @var egressProxyRuleGroups[]
     */
    public $egressProxyRuleGroups;

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
        'egressProxyRuleGroups' => 'EgressProxyRuleGroups',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyRuleGroups)) {
            Model::validateArray($this->egressProxyRuleGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyRuleGroups) {
            if (\is_array($this->egressProxyRuleGroups)) {
                $res['EgressProxyRuleGroups'] = [];
                $n1 = 0;
                foreach ($this->egressProxyRuleGroups as $item1) {
                    $res['EgressProxyRuleGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['EgressProxyRuleGroups'])) {
            if (!empty($map['EgressProxyRuleGroups'])) {
                $model->egressProxyRuleGroups = [];
                $n1 = 0;
                foreach ($map['EgressProxyRuleGroups'] as $item1) {
                    $model->egressProxyRuleGroups[$n1] = egressProxyRuleGroups::fromMap($item1);
                    ++$n1;
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

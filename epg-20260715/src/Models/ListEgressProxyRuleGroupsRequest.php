<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyRuleGroupsRequest\tag;

class ListEgressProxyRuleGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $egressProxyRuleGroupIds;

    /**
     * @var string[]
     */
    public $egressProxyRuleGroupNames;

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
    public $resourceGroupId;

    /**
     * @var int
     */
    public $skip;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'egressProxyRuleGroupIds' => 'EgressProxyRuleGroupIds',
        'egressProxyRuleGroupNames' => 'EgressProxyRuleGroupNames',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'skip' => 'Skip',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyRuleGroupIds)) {
            Model::validateArray($this->egressProxyRuleGroupIds);
        }
        if (\is_array($this->egressProxyRuleGroupNames)) {
            Model::validateArray($this->egressProxyRuleGroupNames);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyRuleGroupIds) {
            if (\is_array($this->egressProxyRuleGroupIds)) {
                $res['EgressProxyRuleGroupIds'] = [];
                $n1 = 0;
                foreach ($this->egressProxyRuleGroupIds as $item1) {
                    $res['EgressProxyRuleGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->egressProxyRuleGroupNames) {
            if (\is_array($this->egressProxyRuleGroupNames)) {
                $res['EgressProxyRuleGroupNames'] = [];
                $n1 = 0;
                foreach ($this->egressProxyRuleGroupNames as $item1) {
                    $res['EgressProxyRuleGroupNames'][$n1] = $item1;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EgressProxyRuleGroupIds'])) {
            if (!empty($map['EgressProxyRuleGroupIds'])) {
                $model->egressProxyRuleGroupIds = [];
                $n1 = 0;
                foreach ($map['EgressProxyRuleGroupIds'] as $item1) {
                    $model->egressProxyRuleGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EgressProxyRuleGroupNames'])) {
            if (!empty($map['EgressProxyRuleGroupNames'])) {
                $model->egressProxyRuleGroupNames = [];
                $n1 = 0;
                foreach ($map['EgressProxyRuleGroupNames'] as $item1) {
                    $model->egressProxyRuleGroupNames[$n1] = $item1;
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

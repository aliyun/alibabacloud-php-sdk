<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSecurityPolicyRequest\tag;

class ListSecurityPolicyRequest extends Model
{
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
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string[]
     */
    public $securityPolicyIds;
    /**
     * @var string[]
     */
    public $securityPolicyNames;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'securityPolicyIds'   => 'SecurityPolicyIds',
        'securityPolicyNames' => 'SecurityPolicyNames',
        'tag'                 => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->securityPolicyIds)) {
            Model::validateArray($this->securityPolicyIds);
        }
        if (\is_array($this->securityPolicyNames)) {
            Model::validateArray($this->securityPolicyNames);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityPolicyIds) {
            if (\is_array($this->securityPolicyIds)) {
                $res['SecurityPolicyIds'] = [];
                $n1                       = 0;
                foreach ($this->securityPolicyIds as $item1) {
                    $res['SecurityPolicyIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->securityPolicyNames) {
            if (\is_array($this->securityPolicyNames)) {
                $res['SecurityPolicyNames'] = [];
                $n1                         = 0;
                foreach ($this->securityPolicyNames as $item1) {
                    $res['SecurityPolicyNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityPolicyIds'])) {
            if (!empty($map['SecurityPolicyIds'])) {
                $model->securityPolicyIds = [];
                $n1                       = 0;
                foreach ($map['SecurityPolicyIds'] as $item1) {
                    $model->securityPolicyIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SecurityPolicyNames'])) {
            if (!empty($map['SecurityPolicyNames'])) {
                $model->securityPolicyNames = [];
                $n1                         = 0;
                foreach ($map['SecurityPolicyNames'] as $item1) {
                    $model->securityPolicyNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

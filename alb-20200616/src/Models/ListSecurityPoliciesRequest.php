<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListSecurityPoliciesRequest extends Model
{
    /**
     * @description 资源组ID
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 分页查询标识
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 查询数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 安全策略名称
     *
     * @var string[]
     */
    public $securityPolicyNames;

    /**
     * @description 安全策略id
     *
     * @var string[]
     */
    public $securityPolicyIds;
    protected $_name = [
        'resourceGroupId'     => 'ResourceGroupId',
        'nextToken'           => 'NextToken',
        'maxResults'          => 'MaxResults',
        'securityPolicyNames' => 'SecurityPolicyNames',
        'securityPolicyIds'   => 'SecurityPolicyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->securityPolicyNames) {
            $res['SecurityPolicyNames'] = $this->securityPolicyNames;
        }
        if (null !== $this->securityPolicyIds) {
            $res['SecurityPolicyIds'] = $this->securityPolicyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecurityPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['SecurityPolicyNames'])) {
            if (!empty($map['SecurityPolicyNames'])) {
                $model->securityPolicyNames = $map['SecurityPolicyNames'];
            }
        }
        if (isset($map['SecurityPolicyIds'])) {
            if (!empty($map['SecurityPolicyIds'])) {
                $model->securityPolicyIds = $map['SecurityPolicyIds'];
            }
        }

        return $model;
    }
}

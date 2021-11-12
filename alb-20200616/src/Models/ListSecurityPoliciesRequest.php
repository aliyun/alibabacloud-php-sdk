<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListSecurityPoliciesRequest extends Model
{
    /**
     * @description 查询数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 分页查询标识
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 资源组ID
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 安全策略id
     *
     * @var string[]
     */
    public $securityPolicyIds;

    /**
     * @description 安全策略名称
     *
     * @var string[]
     */
    public $securityPolicyNames;
    protected $_name = [
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'resourceGroupId'     => 'ResourceGroupId',
        'securityPolicyIds'   => 'SecurityPolicyIds',
        'securityPolicyNames' => 'SecurityPolicyNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityPolicyIds) {
            $res['SecurityPolicyIds'] = $this->securityPolicyIds;
        }
        if (null !== $this->securityPolicyNames) {
            $res['SecurityPolicyNames'] = $this->securityPolicyNames;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityPolicyIds'])) {
            if (!empty($map['SecurityPolicyIds'])) {
                $model->securityPolicyIds = $map['SecurityPolicyIds'];
            }
        }
        if (isset($map['SecurityPolicyNames'])) {
            if (!empty($map['SecurityPolicyNames'])) {
                $model->securityPolicyNames = $map['SecurityPolicyNames'];
            }
        }

        return $model;
    }
}

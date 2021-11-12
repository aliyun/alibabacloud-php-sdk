<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListAclsRequest extends Model
{
    /**
     * @description 访问控制策略Id
     *
     * @var string[]
     */
    public $aclIds;

    /**
     * @description 访问控制策略名称
     *
     * @var string[]
     */
    public $aclNames;

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
    protected $_name = [
        'aclIds'          => 'AclIds',
        'aclNames'        => 'AclNames',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclIds) {
            $res['AclIds'] = $this->aclIds;
        }
        if (null !== $this->aclNames) {
            $res['AclNames'] = $this->aclNames;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAclsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclIds'])) {
            if (!empty($map['AclIds'])) {
                $model->aclIds = $map['AclIds'];
            }
        }
        if (isset($map['AclNames'])) {
            if (!empty($map['AclNames'])) {
                $model->aclNames = $map['AclNames'];
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

        return $model;
    }
}

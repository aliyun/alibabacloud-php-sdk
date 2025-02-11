<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclsRequest\tag;

class ListAclsRequest extends Model
{
    /**
     * @var string[]
     */
    public $aclIds;
    /**
     * @var string[]
     */
    public $aclNames;
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
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'aclIds'          => 'AclIds',
        'aclNames'        => 'AclNames',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'tag'             => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->aclIds)) {
            Model::validateArray($this->aclIds);
        }
        if (\is_array($this->aclNames)) {
            Model::validateArray($this->aclNames);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclIds) {
            if (\is_array($this->aclIds)) {
                $res['AclIds'] = [];
                $n1            = 0;
                foreach ($this->aclIds as $item1) {
                    $res['AclIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->aclNames) {
            if (\is_array($this->aclNames)) {
                $res['AclNames'] = [];
                $n1              = 0;
                foreach ($this->aclNames as $item1) {
                    $res['AclNames'][$n1++] = $item1;
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
        if (isset($map['AclIds'])) {
            if (!empty($map['AclIds'])) {
                $model->aclIds = [];
                $n1            = 0;
                foreach ($map['AclIds'] as $item1) {
                    $model->aclIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AclNames'])) {
            if (!empty($map['AclNames'])) {
                $model->aclNames = [];
                $n1              = 0;
                foreach ($map['AclNames'] as $item1) {
                    $model->aclNames[$n1++] = $item1;
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

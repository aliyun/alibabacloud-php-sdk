<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListTagResourcesRequest\tag;

class ListTagResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string[]
     */
    public $resourceId;
    /**
     * @var string[]
     */
    public $resourcePrincipalName;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'nextToken'             => 'NextToken',
        'pageSize'              => 'PageSize',
        'resourceId'            => 'ResourceId',
        'resourcePrincipalName' => 'ResourcePrincipalName',
        'resourceType'          => 'ResourceType',
        'tag'                   => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->resourceId)) {
            Model::validateArray($this->resourceId);
        }
        if (\is_array($this->resourcePrincipalName)) {
            Model::validateArray($this->resourcePrincipalName);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceId) {
            if (\is_array($this->resourceId)) {
                $res['ResourceId'] = [];
                $n1                = 0;
                foreach ($this->resourceId as $item1) {
                    $res['ResourceId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourcePrincipalName) {
            if (\is_array($this->resourcePrincipalName)) {
                $res['ResourcePrincipalName'] = [];
                $n1                           = 0;
                foreach ($this->resourcePrincipalName as $item1) {
                    $res['ResourcePrincipalName'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = [];
                $n1                = 0;
                foreach ($map['ResourceId'] as $item1) {
                    $model->resourceId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourcePrincipalName'])) {
            if (!empty($map['ResourcePrincipalName'])) {
                $model->resourcePrincipalName = [];
                $n1                           = 0;
                foreach ($map['ResourcePrincipalName'] as $item1) {
                    $model->resourcePrincipalName[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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

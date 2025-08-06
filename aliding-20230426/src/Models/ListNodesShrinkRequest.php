<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ListNodesShrinkRequest extends Model
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
    public $parentNodeId;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var bool
     */
    public $withPermissionRole;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'parentNodeId' => 'ParentNodeId',
        'tenantContextShrink' => 'TenantContext',
        'withPermissionRole' => 'WithPermissionRole',
    ];

    public function validate()
    {
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

        if (null !== $this->parentNodeId) {
            $res['ParentNodeId'] = $this->parentNodeId;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->withPermissionRole) {
            $res['WithPermissionRole'] = $this->withPermissionRole;
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

        if (isset($map['ParentNodeId'])) {
            $model->parentNodeId = $map['ParentNodeId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['WithPermissionRole'])) {
            $model->withPermissionRole = $map['WithPermissionRole'];
        }

        return $model;
    }
}

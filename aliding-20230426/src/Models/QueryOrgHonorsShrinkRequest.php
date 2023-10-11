<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryOrgHonorsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @example 48
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 15
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 123456
     *
     * @var int
     */
    public $orgId;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'maxResults'          => 'maxResults',
        'nextToken'           => 'nextToken',
        'orgId'               => 'orgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrgHonorsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        return $model;
    }
}

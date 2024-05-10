<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgHonorsRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class QueryOrgHonorsRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @example 48
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description This parameter is required.
     *
     * @example 15
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var int
     */
    public $orgId;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'maxResults'    => 'maxResults',
        'nextToken'     => 'nextToken',
        'orgId'         => 'orgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
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
     * @return QueryOrgHonorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
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

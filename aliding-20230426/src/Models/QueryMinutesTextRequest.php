<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesTextRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class QueryMinutesTextRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example 607452e01401526ee39609e1
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var string
     */
    public $direction;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 0
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'conferenceId'  => 'conferenceId',
        'direction'     => 'direction',
        'maxResults'    => 'maxResults',
        'nextToken'     => 'nextToken',
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
        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMinutesTextRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}

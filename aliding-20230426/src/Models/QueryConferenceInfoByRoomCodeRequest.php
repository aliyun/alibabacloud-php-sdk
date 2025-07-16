<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoByRoomCodeRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class QueryConferenceInfoByRoomCodeRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description This parameter is required.
     *
     * @example 583 480 813
     *
     * @var string
     */
    public $roomCode;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'roomCode' => 'roomCode',
    ];

    public function validate() {}

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
        if (null !== $this->roomCode) {
            $res['roomCode'] = $this->roomCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConferenceInfoByRoomCodeRequest
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
        if (isset($map['roomCode'])) {
            $model->roomCode = $map['roomCode'];
        }

        return $model;
    }
}

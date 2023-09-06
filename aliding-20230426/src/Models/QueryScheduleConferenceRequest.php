<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class QueryScheduleConferenceRequest extends Model
{
    /**
     * @example 2a489c68-xxxx-xxxx-xxxx-xxxxxxxxxxxx
     *
     * @var string
     */
    public $requestUnionId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'requestUnionId' => 'RequestUnionId',
        'tenantContext'  => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestUnionId) {
            $res['RequestUnionId'] = $this->requestUnionId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryScheduleConferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestUnionId'])) {
            $model->requestUnionId = $map['RequestUnionId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}

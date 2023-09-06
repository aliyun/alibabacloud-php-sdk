<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryScheduleConferenceShrinkRequest extends Model
{
    /**
     * @example 2a489c68-xxxx-xxxx-xxxx-xxxxxxxxxxxx
     *
     * @var string
     */
    public $requestUnionId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'requestUnionId'      => 'RequestUnionId',
        'tenantContextShrink' => 'TenantContext',
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
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryScheduleConferenceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestUnionId'])) {
            $model->requestUnionId = $map['RequestUnionId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}

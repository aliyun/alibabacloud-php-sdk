<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class QueryRunningInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appShrink;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'appShrink' => 'App',
        'sessionId' => 'SessionId',
        'tenantId'  => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appShrink) {
            $res['App'] = $this->appShrink;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRunningInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->appShrink = $map['App'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class SendVamlRequest extends Model
{
    /**
     * @example 76898bd3b90b4a65b1c078d8824a2e9c
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 5615
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $vaml;
    protected $_name = [
        'sessionId' => 'SessionId',
        'tenantId'  => 'TenantId',
        'vaml'      => 'Vaml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vaml) {
            $res['Vaml'] = $this->vaml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendVamlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Vaml'])) {
            $model->vaml = $map['Vaml'];
        }

        return $model;
    }
}

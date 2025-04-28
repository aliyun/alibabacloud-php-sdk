<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;

class DescribeAuditLogConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $auditLogStatus;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'auditLogStatus' => 'AuditLogStatus',
        'DBClusterId' => 'DBClusterId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->auditLogStatus) {
            $res['AuditLogStatus'] = $this->auditLogStatus;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['AuditLogStatus'])) {
            $model->auditLogStatus = $map['AuditLogStatus'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

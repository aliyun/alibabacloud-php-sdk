<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditLogConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $auditLogStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBClusterId;
    protected $_name = [
        'auditLogStatus' => 'AuditLogStatus',
        'requestId'      => 'RequestId',
        'DBClusterId'    => 'DBClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditLogStatus) {
            $res['AuditLogStatus'] = $this->auditLogStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditLogConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditLogStatus'])) {
            $model->auditLogStatus = $map['AuditLogStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        return $model;
    }
}

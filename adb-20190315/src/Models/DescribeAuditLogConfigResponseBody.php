<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditLogConfigResponseBody extends Model
{
    /**
     * @description The status of SQL audit. Valid values:
     *
     *   **on**: SQL audit is enabled.
     *   **off**: SQL audit is disabled.
     *
     * @example on
     *
     * @var string
     */
    public $auditLogStatus;

    /**
     * @description The ID of the cluster.
     *
     * @example am-t4nj8619bz2w3****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the request.
     *
     * @example F0983B43-B2EC-536A-8791-142B5CF1E9B6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'auditLogStatus' => 'AuditLogStatus',
        'DBClusterId'    => 'DBClusterId',
        'requestId'      => 'RequestId',
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
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

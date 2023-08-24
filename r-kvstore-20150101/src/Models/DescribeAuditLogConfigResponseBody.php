<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditLogConfigResponseBody extends Model
{
    /**
     * @description The ID of the instance. You can call the [DescribeInstances](~~60933~~) operation to query the ID of the instance.
     *
     * @example true
     *
     * @var string
     */
    public $dbAudit;

    /**
     * @description The ID of the request.
     *
     * @example 2BE6E619-A657-42E3-AD2D-18F8428A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the audit log feature is enabled. Valid values:
     *
     *   **true**: The audit log feature is enabled.
     *   **false**: The audit log feature is disabled.
     *
     * >  You can call the [ModifyAuditLogConfig](~~130206~~) operation to enable or disable the audit log feature for an ApsaraDB for Redis instance.
     * @example 5
     *
     * @var string
     */
    public $retention;
    protected $_name = [
        'dbAudit'   => 'DbAudit',
        'requestId' => 'RequestId',
        'retention' => 'Retention',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbAudit) {
            $res['DbAudit'] = $this->dbAudit;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
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
        if (isset($map['DbAudit'])) {
            $model->dbAudit = $map['DbAudit'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        return $model;
    }
}

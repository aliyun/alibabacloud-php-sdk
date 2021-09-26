<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeAuditLogsResponseBody\auditLogs;
use AlibabaCloud\Tea\Model;

class DescribeAuditLogsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var auditLogs[]
     */
    public $auditLogs;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'auditLogs'  => 'AuditLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->auditLogs) {
            $res['AuditLogs'] = [];
            if (null !== $this->auditLogs && \is_array($this->auditLogs)) {
                $n = 0;
                foreach ($this->auditLogs as $item) {
                    $res['AuditLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AuditLogs'])) {
            if (!empty($map['AuditLogs'])) {
                $model->auditLogs = [];
                $n                = 0;
                foreach ($map['AuditLogs'] as $item) {
                    $model->auditLogs[$n++] = null !== $item ? auditLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

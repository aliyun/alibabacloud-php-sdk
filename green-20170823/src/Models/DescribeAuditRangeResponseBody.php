<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditRangeResponseBody\auditRange;
use AlibabaCloud\Tea\Model;

class DescribeAuditRangeResponseBody extends Model
{
    /**
     * @var auditRange
     */
    public $auditRange;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'auditRange' => 'AuditRange',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditRange) {
            $res['AuditRange'] = null !== $this->auditRange ? $this->auditRange->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditRangeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditRange'])) {
            $model->auditRange = auditRange::fromMap($map['AuditRange']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

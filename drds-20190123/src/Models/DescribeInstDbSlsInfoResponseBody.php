<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbSlsInfoResponseBody\auditInfo;
use AlibabaCloud\Tea\Model;

class DescribeInstDbSlsInfoResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var auditInfo
     */
    public $auditInfo;
    protected $_name = [
        'success'   => 'Success',
        'requestId' => 'RequestId',
        'auditInfo' => 'AuditInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->auditInfo) {
            $res['AuditInfo'] = null !== $this->auditInfo ? $this->auditInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstDbSlsInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AuditInfo'])) {
            $model->auditInfo = auditInfo::fromMap($map['AuditInfo']);
        }

        return $model;
    }
}

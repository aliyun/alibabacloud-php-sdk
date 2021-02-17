<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $logAuditStatus;
    protected $_name = [
        'requestId'      => 'RequestId',
        'logAuditStatus' => 'LogAuditStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->logAuditStatus) {
            $res['LogAuditStatus'] = $this->logAuditStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LogAuditStatus'])) {
            $model->logAuditStatus = $map['LogAuditStatus'];
        }

        return $model;
    }
}

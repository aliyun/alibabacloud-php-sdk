<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditSettingResponseBody\auditRange;
use AlibabaCloud\Tea\Model;

class DescribeAuditSettingResponseBody extends Model
{
    /**
     * @var auditRange
     */
    public $auditRange;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $seed;
    protected $_name = [
        'auditRange' => 'AuditRange',
        'callback'   => 'Callback',
        'requestId'  => 'RequestId',
        'seed'       => 'Seed',
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
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditRange'])) {
            $model->auditRange = auditRange::fromMap($map['AuditRange']);
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }

        return $model;
    }
}

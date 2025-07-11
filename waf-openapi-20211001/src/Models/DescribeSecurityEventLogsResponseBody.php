<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventLogsResponseBody\securityEventMetaData;
use AlibabaCloud\Tea\Model;

class DescribeSecurityEventLogsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example D827FCFE-90A7-4330-9326-D33C8B4C7726
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The attack logs returned.
     *
     * @var mixed[]
     */
    public $securityEventLogs;

    /**
     * @description The total number of logs returned.
     *
     * @example 1000
     *
     * @var int
     */
    public $securityEventLogsTotalCount;

    /**
     * @description The metadata of the time series data returned.
     *
     * @var securityEventMetaData
     */
    public $securityEventMetaData;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityEventLogs' => 'SecurityEventLogs',
        'securityEventLogsTotalCount' => 'SecurityEventLogsTotalCount',
        'securityEventMetaData' => 'SecurityEventMetaData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityEventLogs) {
            $res['SecurityEventLogs'] = $this->securityEventLogs;
        }
        if (null !== $this->securityEventLogsTotalCount) {
            $res['SecurityEventLogsTotalCount'] = $this->securityEventLogsTotalCount;
        }
        if (null !== $this->securityEventMetaData) {
            $res['SecurityEventMetaData'] = null !== $this->securityEventMetaData ? $this->securityEventMetaData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityEventLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityEventLogs'])) {
            if (!empty($map['SecurityEventLogs'])) {
                $model->securityEventLogs = $map['SecurityEventLogs'];
            }
        }
        if (isset($map['SecurityEventLogsTotalCount'])) {
            $model->securityEventLogsTotalCount = $map['SecurityEventLogsTotalCount'];
        }
        if (isset($map['SecurityEventMetaData'])) {
            $model->securityEventMetaData = securityEventMetaData::fromMap($map['SecurityEventMetaData']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota;
use AlibabaCloud\Tea\Model;

class DescribeMonitorResourceQuotaAttributeResponseBody extends Model
{
    /**
     * @description The quota of alert phone calls in your purchased resource plan. Unit: calls.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The used quota of the time series in custom monitoring in your purchased plan.
     *
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The details about the quota of detection points that are provided by other carriers in site monitoring.
     *
     * @example 31BC7201-00F2-47B2-B7B9-6A173076ACE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total quota of alert text messages.
     *
     * @var resourceQuota
     */
    public $resourceQuota;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'resourceQuota' => 'ResourceQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceQuota) {
            $res['ResourceQuota'] = null !== $this->resourceQuota ? $this->resourceQuota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitorResourceQuotaAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceQuota'])) {
            $model->resourceQuota = resourceQuota::fromMap($map['ResourceQuota']);
        }

        return $model;
    }
}

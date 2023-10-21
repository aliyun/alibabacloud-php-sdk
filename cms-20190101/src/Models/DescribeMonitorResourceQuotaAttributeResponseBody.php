<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota;
use AlibabaCloud\Tea\Model;

class DescribeMonitorResourceQuotaAttributeResponseBody extends Model
{
    /**
     * @description The status code.
     *
     * > The status code 200 indicates that the request was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message.
     *
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 31BC7201-00F2-47B2-B7B9-6A173076ACE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details about the resource quotas of CloudMonitor.
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

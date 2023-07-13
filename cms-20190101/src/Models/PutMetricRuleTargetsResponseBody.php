<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsResponseBody\failData;
use AlibabaCloud\Tea\Model;

class PutMetricRuleTargetsResponseBody extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **PutMetricRuleTargets**.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The ARN of the resource.
     *
     * For information about how to obtain the ARN of a resource, see [DescribeMetricRuleTargets](~~121592~~).
     *
     * Format: `acs:{Service name abbreviation}:{regionId}:{userId}:/{Resource type}/{Resource name}/message`. Example: `acs:mns:cn-hangzhou:120886317861****:/queues/test123/message`. Fields:
     *
     *   {Service name abbreviation}: the abbreviation of the service name. Valid value: mns.
     *   {userId}: the ID of the Alibaba Cloud account.
     *   {regionId}: the region ID of the message queue or topic.
     *   {Resource type}`: the type of the resource for which alerts are triggered. Valid values: - **queues** - **topics** {Resource name}: the name of the resource. - If the resource type is set to **queues**, the resource name is the name of the message queue. - If the resource type is set to **topics**, the resource name is the name of the topic.`
     *
     * @var failData
     */
    public $failData;

    /**
     * @description The error message.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the alert rule.
     *
     * For information about how to obtain the ID of an alert rule, see [DescribeMetricRuleList](~~114941~~).
     * @example 6A569B0D-9055-58AF-9E82-BAEAF95C0FD5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The level of the alert. Valid values:
     *
     *   INFO: information
     *   WARN: warning
     *   CRITICAL: critical
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'failData'  => 'FailData',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->failData) {
            $res['FailData'] = null !== $this->failData ? $this->failData->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutMetricRuleTargetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FailData'])) {
            $model->failData = failData::fromMap($map['FailData']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

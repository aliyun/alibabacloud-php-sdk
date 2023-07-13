<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateResponseBody\resource;
use AlibabaCloud\Tea\Model;

class ApplyMetricRuleTemplateResponseBody extends Model
{
    /**
     * @description Indicates whether the call succeeds. Valid values:
     *
     *   true: The call succeeds.
     *   false: The call fails.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The resources that are affected by the alert rule.
     *
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the application group to which the alert template is applied.
     *
     * @example 3F897F3C-020A-4993-95B4-63ABB84F83E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The response code.
     *
     * >  The HTTP status code 200 indicates that the call succeeds.
     * @var resource
     */
    public $resource;

    /**
     * @description The details of the generated alert rule.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'resource'  => 'Resource',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyMetricRuleTemplateResponseBody
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
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

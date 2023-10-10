<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules;
use AlibabaCloud\Tea\Model;

class DescribeApplicationScalingRulesResponseBody extends Model
{
    /**
     * @description The auto scaling policies of the application.
     *
     * @var appScalingRules
     */
    public $appScalingRules;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example a5281053-08e4-47a5-b2ab-5c0323de7b5a
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appScalingRules' => 'AppScalingRules',
        'code'            => 'Code',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appScalingRules) {
            $res['AppScalingRules'] = null !== $this->appScalingRules ? $this->appScalingRules->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationScalingRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppScalingRules'])) {
            $model->appScalingRules = appScalingRules::fromMap($map['AppScalingRules']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

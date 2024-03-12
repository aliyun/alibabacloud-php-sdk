<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody;

use AlibabaCloud\Tea\Model;

class errorInfo extends Model
{
    /**
     * @description The error code returned.
     *
     * @example CompliancePackExists
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned.
     *
     * @example The compliance pack already exists.
     *
     * @var string
     */
    public $message;

    /**
     * @description The suggestions that are used to resolve the issue.
     *
     * @example https://next.api.aliyun.com/troubleshoot?q=CompliancePackExists\\u0026product=Config
     *
     * @var string
     */
    public $recommend;

    /**
     * @description The request ID.
     *
     * @example 6D5EAA86-2D41-5CB7-8DA7-B60093ACAA4E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'recommend' => 'Recommend',
        'requestId' => 'RequestId',
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
        if (null !== $this->recommend) {
            $res['Recommend'] = $this->recommend;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorInfo
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
        if (isset($map['Recommend'])) {
            $model->recommend = $map['Recommend'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

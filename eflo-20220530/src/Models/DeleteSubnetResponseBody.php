<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class DeleteSubnetResponseBody extends Model
{
    /**
     * @description The response status code.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description Response content (if the resource has dependent resources, the existing dependent resources will be returned)
     *
     * @example {
     * }
     * @var mixed
     */
    public $content;

    /**
     * @description The error message. (If the instance is in the Exception state, the exception cause is prompted.)
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID, which is used to locate and troubleshoot issues.
     *
     * @example A56F7D3C-8850-5AF4-A342-2D71C9A9D1CC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'content'   => 'Content',
        'message'   => 'Message',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
     * @return DeleteSubnetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content;
use AlibabaCloud\Tea\Model;

class ListVccsResponseBody extends Model
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
     * @description The response parameters.
     *
     * @var content
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
     * @description Request ID of the current request
     *
     * @example 28451248-7038-5184-B5D3-80F104654BE8
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
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
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
     * @return ListVccsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
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

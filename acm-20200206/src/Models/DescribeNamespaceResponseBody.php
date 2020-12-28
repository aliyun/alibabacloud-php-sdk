<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeNamespaceResponseBody\namespace_;
use AlibabaCloud\Tea\Model;

class DescribeNamespaceResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var namespace_
     */
    public $namespace;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'namespace' => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = null !== $this->namespace ? $this->namespace->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNamespaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = namespace_::fromMap($map['Namespace']);
        }

        return $model;
    }
}

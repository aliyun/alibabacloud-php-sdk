<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeNamespacesResponseBody\namespaces;
use AlibabaCloud\Tea\Model;

class DescribeNamespacesResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @var namespaces[]
     */
    public $namespaces;

    /**
     * @example 3116581E-C664-4D3A-A055-****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'namespaces' => 'Namespaces',
        'requestId'  => 'RequestId',
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
        if (null !== $this->namespaces) {
            $res['Namespaces'] = [];
            if (null !== $this->namespaces && \is_array($this->namespaces)) {
                $n = 0;
                foreach ($this->namespaces as $item) {
                    $res['Namespaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNamespacesResponseBody
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
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n                 = 0;
                foreach ($map['Namespaces'] as $item) {
                    $model->namespaces[$n++] = null !== $item ? namespaces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigOptionsResponseBody\stackConfigOption;
use AlibabaCloud\Tea\Model;

class DescribeConfigOptionsResponseBody extends Model
{
    /**
     * @var stackConfigOption
     */
    public $stackConfigOption;

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
    protected $_name = [
        'stackConfigOption' => 'StackConfigOption',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'code'              => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackConfigOption) {
            $res['StackConfigOption'] = null !== $this->stackConfigOption ? $this->stackConfigOption->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigOptionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackConfigOption'])) {
            $model->stackConfigOption = stackConfigOption::fromMap($map['StackConfigOption']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

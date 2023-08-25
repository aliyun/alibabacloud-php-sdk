<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeSparkCodeOutputResponseBody extends Model
{
    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example "{\"schema\":[\"id\",\"name\",\"age\"],\"data\":[\"{\\\"id\\\":10,\\\"name\\\":\\\"z\\\",\\\"age\\\":123}\",\"{\\\"id\\\":2,\\\"name\\\":\\\"b\\\",\\\"age\\\":17}\",\"{\\\"id\\\":1,\\\"name\\\":\\\"a\\\",\\\"age\\\":15}\",\"{\\\"id\\\":3,\\\"name\\\":\\\"c\\\",\\\"age\\\":222}\",\"{\\\"id\\\":10,\\\"name\\\":\\\"z\\\",\\\"age\\\":123}\"],\"haveRows\":true,\"rowNumber\":6}"
     *
     * @var string
     */
    public $output;

    /**
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'   => 'Message',
        'output'    => 'Output',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->output) {
            $res['Output'] = $this->output;
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
     * @return DescribeSparkCodeOutputResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class DescribeJobResultsResponseBody extends Model
{
    /**
     * @var int
     */
    public $exitCode;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exitCode' => 'ExitCode',
        'output' => 'Output',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

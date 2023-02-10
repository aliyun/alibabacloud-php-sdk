<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateBenchmarkTaskResponseBody extends Model
{
    /**
     * @example Benchmark  task [foo] is Creating
     *
     * @var string
     */
    public $message;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example 40325405-579C-4D82********
     *
     * @var string
     */
    public $requestId;

    /**
     * @example benchmark-larec-test-1076
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'message'   => 'Message',
        'region'    => 'Region',
        'requestId' => 'RequestId',
        'taskName'  => 'TaskName',
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBenchmarkTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}

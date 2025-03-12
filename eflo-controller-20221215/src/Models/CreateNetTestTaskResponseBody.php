<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CreateNetTestTaskResponseBody extends Model
{
    /**
     * @description ID of the request
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 启动测试任务ID，网络测试任务的唯一标志。
     *
     * @example dr-uf6i0tv2refv8wz*****
     *
     * @var string
     */
    public $testId;
    protected $_name = [
        'requestId' => 'RequestId',
        'testId'    => 'TestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetTestTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TestId'])) {
            $model->testId = $map['TestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GenerateDefaultServiceTestConfigResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 51945B04-6AA6-410D-93BA-236E0248B104
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service test config
     *
     * @example ---
     * InstancePassword: "$[iact3-auto]"
     * @var string
     */
    public $testConfig;
    protected $_name = [
        'requestId'  => 'RequestId',
        'testConfig' => 'TestConfig',
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
        if (null !== $this->testConfig) {
            $res['TestConfig'] = $this->testConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDefaultServiceTestConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TestConfig'])) {
            $model->testConfig = $map['TestConfig'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationMaintainConfResponseBody\config;
use AlibabaCloud\Tea\Model;

class DescribeActiveOperationMaintainConfResponseBody extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @example 1
     *
     * @var int
     */
    public $hasConfig;

    /**
     * @example 1A586DCB-39A6-4050-81CC-C7BD4CCDB49F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'config'    => 'Config',
        'hasConfig' => 'HasConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->hasConfig) {
            $res['HasConfig'] = $this->hasConfig;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveOperationMaintainConfResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['HasConfig'])) {
            $model->hasConfig = $map['HasConfig'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

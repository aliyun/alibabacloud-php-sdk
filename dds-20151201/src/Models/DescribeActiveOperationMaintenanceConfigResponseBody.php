<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationMaintenanceConfigResponseBody\config;
use AlibabaCloud\Tea\Model;

class DescribeActiveOperationMaintenanceConfigResponseBody extends Model
{
    /**
     * @description The description of the configuration.
     *
     * @var config
     */
    public $config;

    /**
     * @description Indicates whether the O\\&M task is configured. Valid values:
     *
     *   1: The O\\&M task is configured.
     *   0: The O\\&M task is not configured.
     *
     * @example 0
     *
     * @var int
     */
    public $hasConfig;

    /**
     * @description The ID of the request.
     *
     * @example 72651AF9-7897-41A7-8B67-6C15C7F26A0A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'config' => 'Config',
        'hasConfig' => 'HasConfig',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return DescribeActiveOperationMaintenanceConfigResponseBody
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

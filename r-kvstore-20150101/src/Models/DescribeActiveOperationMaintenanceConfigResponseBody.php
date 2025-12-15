<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeActiveOperationMaintenanceConfigResponseBody\config;

class DescribeActiveOperationMaintenanceConfigResponseBody extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var int
     */
    public $hasConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'config' => 'Config',
        'hasConfig' => 'HasConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->hasConfig) {
            $res['HasConfig'] = $this->hasConfig;
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetConfigurationVariateResponseBody\configurationVariate;
use AlibabaCloud\Tea\Model;

class GetConfigurationVariateResponseBody extends Model
{
    /**
     * @var configurationVariate
     */
    public $configurationVariate;

    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configurationVariate' => 'ConfigurationVariate',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationVariate) {
            $res['ConfigurationVariate'] = null !== $this->configurationVariate ? $this->configurationVariate->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConfigurationVariateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationVariate'])) {
            $model->configurationVariate = configurationVariate::fromMap($map['ConfigurationVariate']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

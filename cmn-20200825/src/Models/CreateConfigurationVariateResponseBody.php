<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigurationVariateResponseBody extends Model
{
    /**
     * @example configurationVariateId
     *
     * @var string
     */
    public $configurationVariateId;

    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configurationVariateId' => 'ConfigurationVariateId',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationVariateId) {
            $res['ConfigurationVariateId'] = $this->configurationVariateId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigurationVariateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationVariateId'])) {
            $model->configurationVariateId = $map['ConfigurationVariateId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

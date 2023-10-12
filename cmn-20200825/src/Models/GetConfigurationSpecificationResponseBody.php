<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetConfigurationSpecificationResponseBody\configurationSpecification;
use AlibabaCloud\Tea\Model;

class GetConfigurationSpecificationResponseBody extends Model
{
    /**
     * @var configurationSpecification
     */
    public $configurationSpecification;

    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configurationSpecification' => 'ConfigurationSpecification',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationSpecification) {
            $res['ConfigurationSpecification'] = null !== $this->configurationSpecification ? $this->configurationSpecification->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConfigurationSpecificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationSpecification'])) {
            $model->configurationSpecification = configurationSpecification::fromMap($map['ConfigurationSpecification']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

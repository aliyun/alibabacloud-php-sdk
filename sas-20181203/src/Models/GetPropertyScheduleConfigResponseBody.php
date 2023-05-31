<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetPropertyScheduleConfigResponseBody\propertyScheduleConfig;
use AlibabaCloud\Tea\Model;

class GetPropertyScheduleConfigResponseBody extends Model
{
    /**
     * @description The configurations for the collection frequency of asset fingerprints.
     *
     * @var propertyScheduleConfig
     */
    public $propertyScheduleConfig;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example B37C9052-A73E-4707-A024-92477028****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'propertyScheduleConfig' => 'PropertyScheduleConfig',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyScheduleConfig) {
            $res['PropertyScheduleConfig'] = null !== $this->propertyScheduleConfig ? $this->propertyScheduleConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPropertyScheduleConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyScheduleConfig'])) {
            $model->propertyScheduleConfig = propertyScheduleConfig::fromMap($map['PropertyScheduleConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

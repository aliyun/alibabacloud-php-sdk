<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetPropertyScheduleConfigResponseBody\propertyScheduleConfig;
use AlibabaCloud\Tea\Model;

class GetPropertyScheduleConfigResponseBody extends Model
{
    /**
     * @var propertyScheduleConfig
     */
    public $propertyScheduleConfig;

    /**
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

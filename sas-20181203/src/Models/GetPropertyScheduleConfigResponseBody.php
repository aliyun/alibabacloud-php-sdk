<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetPropertyScheduleConfigResponseBody\propertyScheduleConfig;

class GetPropertyScheduleConfigResponseBody extends Model
{
    /**
     * @var propertyScheduleConfig
     */
    public $propertyScheduleConfig;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'propertyScheduleConfig' => 'PropertyScheduleConfig',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->propertyScheduleConfig) {
            $this->propertyScheduleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyScheduleConfig) {
            $res['PropertyScheduleConfig'] = null !== $this->propertyScheduleConfig ? $this->propertyScheduleConfig->toArray($noStream) : $this->propertyScheduleConfig;
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
        if (isset($map['PropertyScheduleConfig'])) {
            $model->propertyScheduleConfig = propertyScheduleConfig::fromMap($map['PropertyScheduleConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

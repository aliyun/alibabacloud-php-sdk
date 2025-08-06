<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig;

class GetApplicationSsoConfigResponseBody extends Model
{
    /**
     * @var applicationSsoConfig
     */
    public $applicationSsoConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationSsoConfig' => 'ApplicationSsoConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationSsoConfig) {
            $this->applicationSsoConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationSsoConfig) {
            $res['ApplicationSsoConfig'] = null !== $this->applicationSsoConfig ? $this->applicationSsoConfig->toArray($noStream) : $this->applicationSsoConfig;
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
        if (isset($map['ApplicationSsoConfig'])) {
            $model->applicationSsoConfig = applicationSsoConfig::fromMap($map['ApplicationSsoConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

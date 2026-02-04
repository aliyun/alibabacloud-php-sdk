<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceControlConfigurationResponseBody\instanceControlConfiguration;

class GetInstanceControlConfigurationResponseBody extends Model
{
    /**
     * @var instanceControlConfiguration
     */
    public $instanceControlConfiguration;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceControlConfiguration' => 'InstanceControlConfiguration',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceControlConfiguration) {
            $this->instanceControlConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceControlConfiguration) {
            $res['InstanceControlConfiguration'] = null !== $this->instanceControlConfiguration ? $this->instanceControlConfiguration->toArray($noStream) : $this->instanceControlConfiguration;
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
        if (isset($map['InstanceControlConfiguration'])) {
            $model->instanceControlConfiguration = instanceControlConfiguration::fromMap($map['InstanceControlConfiguration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

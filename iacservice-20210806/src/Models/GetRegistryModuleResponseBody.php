<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryModuleResponseBody\registryModule;

class GetRegistryModuleResponseBody extends Model
{
    /**
     * @var registryModule
     */
    public $registryModule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'registryModule' => 'registryModule',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->registryModule) {
            $this->registryModule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registryModule) {
            $res['registryModule'] = null !== $this->registryModule ? $this->registryModule->toArray($noStream) : $this->registryModule;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['registryModule'])) {
            $model->registryModule = registryModule::fromMap($map['registryModule']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

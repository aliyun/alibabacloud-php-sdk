<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryModuleVersionResponseBody\moduleVersion;

class GetRegistryModuleVersionResponseBody extends Model
{
    /**
     * @var moduleVersion
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'moduleVersion' => 'moduleVersion',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->moduleVersion) {
            $this->moduleVersion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = null !== $this->moduleVersion ? $this->moduleVersion->toArray($noStream) : $this->moduleVersion;
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
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = moduleVersion::fromMap($map['moduleVersion']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

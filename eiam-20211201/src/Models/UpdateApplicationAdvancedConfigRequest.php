<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationAdvancedConfigRequest\scimServerAdvancedConfig;

class UpdateApplicationAdvancedConfigRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var scimServerAdvancedConfig
     */
    public $scimServerAdvancedConfig;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'instanceId' => 'InstanceId',
        'scimServerAdvancedConfig' => 'ScimServerAdvancedConfig',
    ];

    public function validate()
    {
        if (null !== $this->scimServerAdvancedConfig) {
            $this->scimServerAdvancedConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->scimServerAdvancedConfig) {
            $res['ScimServerAdvancedConfig'] = null !== $this->scimServerAdvancedConfig ? $this->scimServerAdvancedConfig->toArray($noStream) : $this->scimServerAdvancedConfig;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ScimServerAdvancedConfig'])) {
            $model->scimServerAdvancedConfig = scimServerAdvancedConfig::fromMap($map['ScimServerAdvancedConfig']);
        }

        return $model;
    }
}

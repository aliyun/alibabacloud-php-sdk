<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeleteConfigurationVariateRequest extends Model
{
    /**
     * @example configurationVariateId
     *
     * @var string
     */
    public $configurationVariateId;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'configurationVariateId' => 'ConfigurationVariateId',
        'instanceId'             => 'InstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConfigurationVariateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationVariateId'])) {
            $model->configurationVariateId = $map['ConfigurationVariateId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

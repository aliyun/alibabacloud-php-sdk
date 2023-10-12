<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeleteConfigurationSpecificationRequest extends Model
{
    /**
     * @example configurationSpecificationId
     *
     * @var string
     */
    public $configurationSpecificationId;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'configurationSpecificationId' => 'ConfigurationSpecificationId',
        'instanceId'                   => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationSpecificationId) {
            $res['ConfigurationSpecificationId'] = $this->configurationSpecificationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConfigurationSpecificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationSpecificationId'])) {
            $model->configurationSpecificationId = $map['ConfigurationSpecificationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

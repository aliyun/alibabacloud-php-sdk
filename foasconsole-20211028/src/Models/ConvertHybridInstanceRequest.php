<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertHybridInstanceRequest\resourceSpec;
use AlibabaCloud\Tea\Model;

class ConvertHybridInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example sc_flinkserverless_public_cn-7e22ae5sess
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $region;

    /**
     * @description This parameter is required.
     *
     * @var resourceSpec
     */
    public $resourceSpec;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'region'       => 'Region',
        'resourceSpec' => 'ResourceSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertHybridInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Tea\Model;

class ConvertHybridInstanceShrinkRequest extends Model
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
     * @var string
     */
    public $resourceSpecShrink;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'region'             => 'Region',
        'resourceSpecShrink' => 'ResourceSpec',
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
        if (null !== $this->resourceSpecShrink) {
            $res['ResourceSpec'] = $this->resourceSpecShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertHybridInstanceShrinkRequest
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
            $model->resourceSpecShrink = $map['ResourceSpec'];
        }

        return $model;
    }
}

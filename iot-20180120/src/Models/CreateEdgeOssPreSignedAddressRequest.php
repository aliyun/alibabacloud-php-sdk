<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeOssPreSignedAddressRequest extends Model
{
    /**
     * @example testfile.zip
     *
     * @var string
     */
    public $fileName;

    /**
     * @example F3APY0tPLhmgGtx0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example df9b9f441*********4c90d0c21d14
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 2.0.0
     *
     * @var string
     */
    public $resourceVersion;

    /**
     * @example DRIVER_VERSION_CONTENT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fileName'        => 'FileName',
        'instanceId'      => 'InstanceId',
        'iotInstanceId'   => 'IotInstanceId',
        'resourceId'      => 'ResourceId',
        'resourceVersion' => 'ResourceVersion',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceVersion) {
            $res['ResourceVersion'] = $this->resourceVersion;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeOssPreSignedAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceVersion'])) {
            $model->resourceVersion = $map['ResourceVersion'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

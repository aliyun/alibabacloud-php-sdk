<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeOssPreSignedAddressRequest extends Model
{
    /**
     * @description The name of the object whose URL is to be obtained. The format is `<File name>.<File name extension>`.
     *
     * @example testfile.zip
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The ID of the edge instance. To obtain the instance ID, perform the following steps: Log on to the [Link IoT Edge console](https://iot.console.aliyun.com/le/instance/list). On the **Edge Instances** page, move the pointer over the name of the edge instance that uses the driver and obtain the instance ID.
     *
     * You can also call the [QueryEdgeInstance](~~135214~~) operation to query the instance ID.
     *
     * >  When the **Type** parameter is set to **INSTANCE_DRIVER_VERSION_CONFIG**, this parameter is required.
     * @example F3APY0tPLhmgGtx0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Internet of Things (IoT) service instance. This parameter is not required for the public instance but required for Enterprise Edition instances.
     *
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the resource for which the object URL is to be obtained. Only driver resources are supported. Set this parameter to the ID of the corresponding driver.
     *
     * To obtain the driver ID, perform the following steps: Log on to the [Link IoT Edge console](https://iot.console.aliyun.com/le/instance/list). On the **Drivers** page, move the pointer over the name of the driver for which the object URL you want to obtain and obtain the driver ID. You can also call the [QueryEdgeDriver](~~155776~~) operation to query the driver ID.
     * @example df9b9f441*********4c90d0c21d14
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The version number of the resource. Only driver resources are supported. Set this parameter to the version number of the corresponding driver.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $resourceVersion;

    /**
     * @description The content type of the object. Valid values:
     *
     *   DRIVER_VERSION_CONTENT: the code of a specific driver version.
     *   DRIVER_VERSION_DEFAULT_CONFIG: the default configuration of a specific driver version.
     *   INSTANCE_DRIVER_VERSION_CONFIG: the configuration of a specific driver version that is used in an edge instance.
     *
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

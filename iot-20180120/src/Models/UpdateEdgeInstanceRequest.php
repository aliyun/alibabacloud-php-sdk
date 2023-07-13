<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateEdgeInstanceRequest extends Model
{
    /**
     * @description Specifies whether to enable the edge instance. Valid values:
     *
     *   true: enables the edge instance.
     *   false: disables the edge instance.
     *
     * If you do not set this parameter, this parameter is not updated.
     * @example true
     *
     * @var bool
     */
    public $bizEnable;

    /**
     * @description The ID of the edge instance. To obtain the instance ID, perform the following steps: Log on to the [Link IoT Edge console](https://iot.console.aliyun.com/le/instance/list). On the **Edge Instances** page, move the pointer over the name of the edge instance that you want to update and obtain the instance ID.
     *
     * You can also call the [QueryEdgeInstance](~~135214~~) operation to query the instance ID.
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
     * @description The name of the edge instance.
     *
     * The name can be up to 20 characters in length and can contain letters, digits, underscores (\_), and hyphens (-).
     * @example LinkIoTEdge_Node
     *
     * @var string
     */
    public $name;

    /**
     * @description The specifications of the edge instance. Valid values:
     *
     *   10: Lite Edition
     *   20: Standard Edition
     *   30: Pro Edition
     *
     * If you do not set this parameter, this parameter is not updated.
     * @example 10
     *
     * @var int
     */
    public $spec;

    /**
     * @description The tags of the edge instance. Each tag is a key-value pair. Multiple tags are separated with commas (,). Example: `k1:v1,k2:v2`.
     *
     *   Take note of the following limits on tag keys:
     *
     *   Tag keys cannot be left empty.
     *   Tag keys must be unique in the edge instance.
     *   Tag keys support only letters.
     *   Each tag key can be up to 20 characters in length.
     *
     *   Take note of the following limits on tag values:
     *
     *   Tag values cannot be left empty.
     *   A tag value can contain letters, digits, underscores (\_), and hyphens (-).
     *   Each tag value can be up to 20 characters in length.
     *
     * If you do not set this parameter, this parameter is not updated.
     * @example k1:v1,k2:v2
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'bizEnable'     => 'BizEnable',
        'instanceId'    => 'InstanceId',
        'iotInstanceId' => 'IotInstanceId',
        'name'          => 'Name',
        'spec'          => 'Spec',
        'tags'          => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizEnable) {
            $res['BizEnable'] = $this->bizEnable;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEdgeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizEnable'])) {
            $model->bizEnable = $map['BizEnable'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}

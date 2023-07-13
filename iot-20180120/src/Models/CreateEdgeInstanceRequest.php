<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeInstanceRequest extends Model
{
    /**
     * @description The ID of the Internet of Things (IoT) service instance. This parameter is not required for public instances. However, this parameter is required for the instances that you have purchased.
     *
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The name of the edge instance.
     *
     * An instance name cannot exceed 20 characters in length and can contain uppercase letters, lowercase letters, digits, underscores (\_), and hyphens (-).
     * @example LinkIoTEdge_Node
     *
     * @var string
     */
    public $name;

    /**
     * @description The specification of the edge instance.
     *
     *   10: Lite Edition.
     *   20: Standard Edition.
     *   30: Pro Edition.
     *
     * Default value: 20.
     * @example 20
     *
     * @var int
     */
    public $spec;

    /**
     * @description The tags of the edge instance. Syntax of a tag: `key:value`. Multiple tags are separated with commas (,), for example, `k1:v1,k2:v2`.
     *
     *   Note the following limits on tag keys:
     *
     *   Tag values cannot be left empty.
     *   Tag keys must be unique in the edge instance.
     *   Tag keys only support letters.
     *   Each tag key cannot exceed 20 characters in length.
     *
     *   Note the following limits on tag values:
     *
     *   Tag values cannot be left empty.
     *   A tag value can contain uppercase letters, lowercase letters, digits, underscores (\_), and hyphens (-).
     *   Each tag value cannot exceed 20 characters in length.
     *
     * @example k1:v1,k2:v2
     *
     * @var string
     */
    public $tags;
    protected $_name = [
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
     * @return CreateEdgeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

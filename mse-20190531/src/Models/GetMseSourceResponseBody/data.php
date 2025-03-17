<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetMseSourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The endpoint of the instance.
     *
     * @example mse-af1****-nacos-ans.mse.aliyuncs.com:8848
     *
     * @var string
     */
    public $address;

    /**
     * @description The ID of cluster.
     *
     * @example mse_
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the instance
     *
     * @example mse_prepaid_public_cn-7pp2eec****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The type.
     *
     * @example Nacos
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'address' => 'Address',
        'clusterId' => 'ClusterId',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

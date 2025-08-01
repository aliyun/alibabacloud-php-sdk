<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaServicesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the instance.
     *
     * @var string[]
     */
    public $instancesId;

    /**
     * @description The name of the service.
     *
     * @example CONTACTINFO
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of service providers. The value is in the following format: Number of healthy instances/Total number of instances.
     *
     * @example 1/1
     *
     * @var string
     */
    public $upStatus;
    protected $_name = [
        'instancesId' => 'InstancesId',
        'name' => 'Name',
        'upStatus' => 'UpStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancesId) {
            $res['InstancesId'] = $this->instancesId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->upStatus) {
            $res['UpStatus'] = $this->upStatus;
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
        if (isset($map['InstancesId'])) {
            if (!empty($map['InstancesId'])) {
                $model->instancesId = $map['InstancesId'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UpStatus'])) {
            $model->upStatus = $map['UpStatus'];
        }

        return $model;
    }
}

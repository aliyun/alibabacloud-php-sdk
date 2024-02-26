<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class CreateEndpointRequest extends Model
{
    /**
     * @example inst-ivrq92qhbyrg4jctih
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example endpoint-1
     *
     * @var string
     */
    public $name;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @example vpc-j6co2fcdsl1q0gnuc3ym3
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-j6cmr00qjyrft6jo2mg7g
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'name'       => 'Name',
        'type'       => 'Type',
        'vpcId'      => 'VpcId',
        'vswitchId'  => 'VswitchId',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}

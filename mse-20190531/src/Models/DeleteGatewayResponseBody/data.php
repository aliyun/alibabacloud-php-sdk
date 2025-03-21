<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The unique ID of the gateway. The ID is automatically generated by the system.
     *
     * @example gw-7ea3da97b96543e19f6c597c****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The creation time.
     *
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the gateway was last updated.
     *
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the primary key.
     *
     * @example 12
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the gateway.
     *
     * @example mse-bc1a29b0-reg-center-0-1
     *
     * @var string
     */
    public $name;

    /**
     * @description The information about the user.
     *
     * @example 1231254
     *
     * @var string
     */
    public $primaryUser;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The number of gateway replicas.
     *
     * @example 2
     *
     * @var int
     */
    public $replica;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp11ufzqn6mmb8dtzz82
     *
     * @var string
     */
    public $securityGroup;

    /**
     * @description The specifications of the gateway.
     *
     * @example MSE_GTW_16_32_200_c
     *
     * @var string
     */
    public $spec;

    /**
     * @description The status of the gateway. Valid values: 0: The gateway is being created. 1: The gateway fails to be created. 2: The gateway is running. 3: The gateway is changing. 4: The gateway is scaling down. 6: The gateway is scaling up. 8: The gateway is being deleted. 10: The gateway is restarting. 11: The gateway is being rebuilt. 12: The gateway is updating. 13: The gateway fails to be updated.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the virtual private cloud (VPC) where the gateway resides.
     *
     * @example vpc-bp1328cm01m6uel42b5zb
     *
     * @var string
     */
    public $vpc;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp18zeqxx6mpuq843z4n5
     *
     * @var string
     */
    public $vswitch;
    protected $_name = [
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
        'primaryUser' => 'PrimaryUser',
        'region' => 'Region',
        'replica' => 'Replica',
        'securityGroup' => 'SecurityGroup',
        'spec' => 'Spec',
        'status' => 'Status',
        'vpc' => 'Vpc',
        'vswitch' => 'Vswitch',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = $this->vpc;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
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
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Vpc'])) {
            $model->vpc = $map['Vpc'];
        }
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }

        return $model;
    }
}

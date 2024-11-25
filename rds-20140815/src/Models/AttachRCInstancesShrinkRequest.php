<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class AttachRCInstancesShrinkRequest extends Model
{
    /**
     * @description The node IDs.
     *
     * This parameter is required.
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @description The key pair of the node.
     *
     * @example Custom_test
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description The logon password of the node.
     *
     * @example testPassword
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * > This is a reserved parameter.
     * @example None
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceIdsShrink' => 'InstanceIds',
        'keyPair'           => 'KeyPair',
        'password'          => 'Password',
        'regionId'          => 'RegionId',
        'vpcId'             => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }
        if (null !== $this->keyPair) {
            $res['KeyPair'] = $this->keyPair;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachRCInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }
        if (isset($map['KeyPair'])) {
            $model->keyPair = $map['KeyPair'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

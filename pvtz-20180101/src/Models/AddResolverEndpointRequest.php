<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverEndpointRequest\ipConfig;
use AlibabaCloud\Tea\Model;

class AddResolverEndpointRequest extends Model
{
    /**
     * @description The source IP addresses of outbound traffic. You must add two to six source IP addresses to ensure high availability.
     *
     * This parameter is required.
     * @var ipConfig[]
     */
    public $ipConfig;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The endpoint name. The name can be up to 20 characters in length. If the upper limit is exceeded, an error message is returned.
     *
     * This parameter is required.
     * @example endpoint-test-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The security group ID.
     *
     * This parameter is required.
     * @example kqlqlqjqqkq
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The outbound VPC ID.
     *
     * This parameter is required.
     * @example vpc-129343jslslsks
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The region ID of the outbound virtual private cloud (VPC).
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'ipConfig'        => 'IpConfig',
        'lang'            => 'Lang',
        'name'            => 'Name',
        'securityGroupId' => 'SecurityGroupId',
        'vpcId'           => 'VpcId',
        'vpcRegionId'     => 'VpcRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipConfig) {
            $res['IpConfig'] = [];
            if (null !== $this->ipConfig && \is_array($this->ipConfig)) {
                $n = 0;
                foreach ($this->ipConfig as $item) {
                    $res['IpConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddResolverEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpConfig'])) {
            if (!empty($map['IpConfig'])) {
                $model->ipConfig = [];
                $n               = 0;
                foreach ($map['IpConfig'] as $item) {
                    $model->ipConfig[$n++] = null !== $item ? ipConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListGrantVSwitchEnisResponseBody;

use AlibabaCloud\Tea\Model;

class grantVSwitchEnis extends Model
{
    /**
     * @example created by CBN
     *
     * @var string
     */
    public $description;

    /**
     * @example eni-p0w172vv82kxzb49****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @example false
     *
     * @var bool
     */
    public $transitRouterFlag;

    /**
     * @example vsw-p0w9s2ig1jnwgrbzl****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-p0w9alkte4w2htrqe****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'description'          => 'Description',
        'networkInterfaceId'   => 'NetworkInterfaceId',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'primaryIpAddress'     => 'PrimaryIpAddress',
        'transitRouterFlag'    => 'TransitRouterFlag',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }
        if (null !== $this->transitRouterFlag) {
            $res['TransitRouterFlag'] = $this->transitRouterFlag;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grantVSwitchEnis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }
        if (isset($map['TransitRouterFlag'])) {
            $model->transitRouterFlag = $map['TransitRouterFlag'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

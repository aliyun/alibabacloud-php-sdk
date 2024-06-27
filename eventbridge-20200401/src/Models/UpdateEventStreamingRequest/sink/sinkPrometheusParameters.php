<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters\authorizationType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters\data;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters\headerParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters\networkType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters\password;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters\securityGroupId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters\URL;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters\username;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters\vpcId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters\vSwitchId;
use AlibabaCloud\Tea\Model;

class sinkPrometheusParameters extends Model
{
    /**
     * @description The authentication method.
     *
     * @var authorizationType
     */
    public $authorizationType;

    /**
     * @description The metric data.
     *
     * @var data
     */
    public $data;

    /**
     * @var headerParameters
     */
    public $headerParameters;

    /**
     * @description The network type.
     *
     * @var networkType
     */
    public $networkType;

    /**
     * @description The password.
     *
     * @var password
     */
    public $password;

    /**
     * @description The ID of the security group to which the Managed Service for Prometheus instance belongs.
     *
     * @var securityGroupId
     */
    public $securityGroupId;

    /**
     * @description The URL for the remote write configuration item of the Managed Service for Prometheus instance.
     *
     * @var URL
     */
    public $URL;

    /**
     * @description The username.
     *
     * @var username
     */
    public $username;

    /**
     * @description The ID of the vSwitch with which the Managed Service for Prometheus instance is associated.
     *
     * @var vSwitchId
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC to which the Managed Service for Prometheus instance belongs.
     *
     * @var vpcId
     */
    public $vpcId;
    protected $_name = [
        'authorizationType' => 'AuthorizationType',
        'data'              => 'Data',
        'headerParameters'  => 'HeaderParameters',
        'networkType'       => 'NetworkType',
        'password'          => 'Password',
        'securityGroupId'   => 'SecurityGroupId',
        'URL'               => 'URL',
        'username'          => 'Username',
        'vSwitchId'         => 'VSwitchId',
        'vpcId'             => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = null !== $this->authorizationType ? $this->authorizationType->toMap() : null;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->headerParameters) {
            $res['HeaderParameters'] = null !== $this->headerParameters ? $this->headerParameters->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = null !== $this->networkType ? $this->networkType->toMap() : null;
        }
        if (null !== $this->password) {
            $res['Password'] = null !== $this->password ? $this->password->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = null !== $this->securityGroupId ? $this->securityGroupId->toMap() : null;
        }
        if (null !== $this->URL) {
            $res['URL'] = null !== $this->URL ? $this->URL->toMap() : null;
        }
        if (null !== $this->username) {
            $res['Username'] = null !== $this->username ? $this->username->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = null !== $this->vSwitchId ? $this->vSwitchId->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = null !== $this->vpcId ? $this->vpcId->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkPrometheusParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = authorizationType::fromMap($map['AuthorizationType']);
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['HeaderParameters'])) {
            $model->headerParameters = headerParameters::fromMap($map['HeaderParameters']);
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = networkType::fromMap($map['NetworkType']);
        }
        if (isset($map['Password'])) {
            $model->password = password::fromMap($map['Password']);
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = securityGroupId::fromMap($map['SecurityGroupId']);
        }
        if (isset($map['URL'])) {
            $model->URL = URL::fromMap($map['URL']);
        }
        if (isset($map['Username'])) {
            $model->username = username::fromMap($map['Username']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = vSwitchId::fromMap($map['VSwitchId']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = vpcId::fromMap($map['VpcId']);
        }

        return $model;
    }
}

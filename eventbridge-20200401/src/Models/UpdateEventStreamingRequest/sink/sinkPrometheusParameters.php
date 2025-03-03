<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;

use AlibabaCloud\Dara\Model;
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

class sinkPrometheusParameters extends Model
{
    /**
     * @var authorizationType
     */
    public $authorizationType;
    /**
     * @var data
     */
    public $data;
    /**
     * @var headerParameters
     */
    public $headerParameters;
    /**
     * @var networkType
     */
    public $networkType;
    /**
     * @var password
     */
    public $password;
    /**
     * @var securityGroupId
     */
    public $securityGroupId;
    /**
     * @var URL
     */
    public $URL;
    /**
     * @var username
     */
    public $username;
    /**
     * @var vSwitchId
     */
    public $vSwitchId;
    /**
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
        if (null !== $this->authorizationType) {
            $this->authorizationType->validate();
        }
        if (null !== $this->data) {
            $this->data->validate();
        }
        if (null !== $this->headerParameters) {
            $this->headerParameters->validate();
        }
        if (null !== $this->networkType) {
            $this->networkType->validate();
        }
        if (null !== $this->password) {
            $this->password->validate();
        }
        if (null !== $this->securityGroupId) {
            $this->securityGroupId->validate();
        }
        if (null !== $this->URL) {
            $this->URL->validate();
        }
        if (null !== $this->username) {
            $this->username->validate();
        }
        if (null !== $this->vSwitchId) {
            $this->vSwitchId->validate();
        }
        if (null !== $this->vpcId) {
            $this->vpcId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = null !== $this->authorizationType ? $this->authorizationType->toArray($noStream) : $this->authorizationType;
        }

        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->headerParameters) {
            $res['HeaderParameters'] = null !== $this->headerParameters ? $this->headerParameters->toArray($noStream) : $this->headerParameters;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = null !== $this->networkType ? $this->networkType->toArray($noStream) : $this->networkType;
        }

        if (null !== $this->password) {
            $res['Password'] = null !== $this->password ? $this->password->toArray($noStream) : $this->password;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = null !== $this->securityGroupId ? $this->securityGroupId->toArray($noStream) : $this->securityGroupId;
        }

        if (null !== $this->URL) {
            $res['URL'] = null !== $this->URL ? $this->URL->toArray($noStream) : $this->URL;
        }

        if (null !== $this->username) {
            $res['Username'] = null !== $this->username ? $this->username->toArray($noStream) : $this->username;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = null !== $this->vSwitchId ? $this->vSwitchId->toArray($noStream) : $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = null !== $this->vpcId ? $this->vpcId->toArray($noStream) : $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

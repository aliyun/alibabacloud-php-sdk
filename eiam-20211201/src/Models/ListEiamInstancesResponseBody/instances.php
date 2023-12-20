<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListEiamInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description 实例描述信息
     *
     * @var string
     */
    public $description;

    /**
     * @description 实例developer私网域名地址
     *
     * @example eiam-developerapi-cn.vpc-proxy.aliyuncs.com
     *
     * @var string
     */
    public $developerAPIPrivateDomain;

    /**
     * @description 实例developer公网域名地址
     *
     * @example eiam-developerapi.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $developerAPIPublicDomain;

    /**
     * @description 实例id
     *
     * @example idaas_eypq6ljgyeuwmlw672sulxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 实例状态，Pending(初始状态)、Creating(创建中)、Running(运行中)、Disabled(禁用)、CreateFailed(创建失败)
     *
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description 实例版本，EIAM2.0/ EIAM1.0
     *
     * @example EIAM 2.0
     *
     * @var string
     */
    public $instanceVersion;

    /**
     * @description 实例openApi私网域名地址
     *
     * @example eiam-cn.vpc-proxy.aliyuncs.com
     *
     * @var string
     */
    public $openAPIPrivateDomain;

    /**
     * @description 实例openApi公网域名地址
     *
     * @example eiam.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $openAPIPublicDomain;

    /**
     * @description 实例域名地址
     *
     * @example xxxx.aliyunidaas.com
     *
     * @var string
     */
    public $SSODomain;

    /**
     * @description 实例的创建时间
     *
     * @example 1677810869300
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'description'               => 'Description',
        'developerAPIPrivateDomain' => 'DeveloperAPIPrivateDomain',
        'developerAPIPublicDomain'  => 'DeveloperAPIPublicDomain',
        'instanceId'                => 'InstanceId',
        'instanceStatus'            => 'InstanceStatus',
        'instanceVersion'           => 'InstanceVersion',
        'openAPIPrivateDomain'      => 'OpenAPIPrivateDomain',
        'openAPIPublicDomain'       => 'OpenAPIPublicDomain',
        'SSODomain'                 => 'SSODomain',
        'startTime'                 => 'StartTime',
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
        if (null !== $this->developerAPIPrivateDomain) {
            $res['DeveloperAPIPrivateDomain'] = $this->developerAPIPrivateDomain;
        }
        if (null !== $this->developerAPIPublicDomain) {
            $res['DeveloperAPIPublicDomain'] = $this->developerAPIPublicDomain;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceVersion) {
            $res['InstanceVersion'] = $this->instanceVersion;
        }
        if (null !== $this->openAPIPrivateDomain) {
            $res['OpenAPIPrivateDomain'] = $this->openAPIPrivateDomain;
        }
        if (null !== $this->openAPIPublicDomain) {
            $res['OpenAPIPublicDomain'] = $this->openAPIPublicDomain;
        }
        if (null !== $this->SSODomain) {
            $res['SSODomain'] = $this->SSODomain;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeveloperAPIPrivateDomain'])) {
            $model->developerAPIPrivateDomain = $map['DeveloperAPIPrivateDomain'];
        }
        if (isset($map['DeveloperAPIPublicDomain'])) {
            $model->developerAPIPublicDomain = $map['DeveloperAPIPublicDomain'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceVersion'])) {
            $model->instanceVersion = $map['InstanceVersion'];
        }
        if (isset($map['OpenAPIPrivateDomain'])) {
            $model->openAPIPrivateDomain = $map['OpenAPIPrivateDomain'];
        }
        if (isset($map['OpenAPIPublicDomain'])) {
            $model->openAPIPublicDomain = $map['OpenAPIPublicDomain'];
        }
        if (isset($map['SSODomain'])) {
            $model->SSODomain = $map['SSODomain'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

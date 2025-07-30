<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListEiamInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The instance description.
     *
     * @example instance test
     *
     * @var string
     */
    public $description;

    /**
     * @description The private domain name of the instance Developer API.
     *
     * @example eiam-developerapi-cn.vpc-proxy.aliyuncs.com
     *
     * @var string
     */
    public $developerAPIPrivateDomain;

    /**
     * @description The public domain of the instance Developer API.
     *
     * @example eiam-developerapi.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $developerAPIPublicDomain;

    /**
     * @description The instance ID.
     *
     * @example idaas_eypq6ljgyeuwmlw672sulxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance status.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The instance version.
     *
     * Valid values:
     *
     *   EIAM 2.0
     *   EIAM 1.0
     *
     * @example EIAM 2.0
     *
     * @var string
     */
    public $instanceVersion;

    /**
     * @description The private domain of the instance OpenAPI.
     *
     * @example eiam-cn.vpc-proxy.aliyuncs.com
     *
     * @var string
     */
    public $openAPIPrivateDomain;

    /**
     * @description The public domain of the instance OpenAPI.
     *
     * @example eiam.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $openAPIPublicDomain;

    /**
     * @description The single sign-on (SSO) domain  of the instance.
     *
     * @example xxxx.aliyunidaas.com
     *
     * @var string
     */
    public $SSODomain;

    /**
     * @description The time when the instance was created.
     *
     * @example 1677810869300
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'description' => 'Description',
        'developerAPIPrivateDomain' => 'DeveloperAPIPrivateDomain',
        'developerAPIPublicDomain' => 'DeveloperAPIPublicDomain',
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'instanceVersion' => 'InstanceVersion',
        'openAPIPrivateDomain' => 'OpenAPIPrivateDomain',
        'openAPIPublicDomain' => 'OpenAPIPublicDomain',
        'SSODomain' => 'SSODomain',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcEndpointServicesByEndUserResponseBody;

use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @example {   \"Version\" : \"1\",   \"Statement\" : [ {     \"Effect\" : \"Allow\",     \"Action\" : \"*\",     \"Principal\" : \"*\",     \"Resource\" : \"*\"   } ] }
     *
     * @var string
     */
    public $defaultPolicyDocument;

    /**
     * @example oss-admin.aliyuncs.com
     *
     * @var string
     */
    public $serviceDomain;

    /**
     * @example vpces-m5enwdmilo210aibo9****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example com.aliyun.cn-hangzhou.oss
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportPolicy;
    protected $_name = [
        'defaultPolicyDocument' => 'DefaultPolicyDocument',
        'serviceDomain'         => 'ServiceDomain',
        'serviceId'             => 'ServiceId',
        'serviceName'           => 'ServiceName',
        'supportPolicy'         => 'SupportPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultPolicyDocument) {
            $res['DefaultPolicyDocument'] = $this->defaultPolicyDocument;
        }
        if (null !== $this->serviceDomain) {
            $res['ServiceDomain'] = $this->serviceDomain;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->supportPolicy) {
            $res['SupportPolicy'] = $this->supportPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultPolicyDocument'])) {
            $model->defaultPolicyDocument = $map['DefaultPolicyDocument'];
        }
        if (isset($map['ServiceDomain'])) {
            $model->serviceDomain = $map['ServiceDomain'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SupportPolicy'])) {
            $model->supportPolicy = $map['SupportPolicy'];
        }

        return $model;
    }
}

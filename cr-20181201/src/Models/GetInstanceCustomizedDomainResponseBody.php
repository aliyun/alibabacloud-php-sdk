<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceCustomizedDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certId' => 'CertId',
        'code' => 'Code',
        'createTime' => 'CreateTime',
        'domain' => 'Domain',
        'domainType' => 'DomainType',
        'endpointType' => 'EndpointType',
        'instanceId' => 'InstanceId',
        'isSuccess' => 'IsSuccess',
        'modifiedTime' => 'ModifiedTime',
        'moduleName' => 'ModuleName',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }

        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }

        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListWorkerResourceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $certDomain;

    /**
     * @var int
     */
    public $certId;

    /**
     * @var string
     */
    public $certInstanceId;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $cloudName;

    /**
     * @var string
     */
    public $cloudProduct;

    /**
     * @var string
     */
    public $cloudRegion;

    /**
     * @var bool
     */
    public $defaultResource;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceCertId;

    /**
     * @var string
     */
    public $resourceDomain;

    /**
     * @var int
     */
    public $resourceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'certDomain' => 'CertDomain',
        'certId' => 'CertId',
        'certInstanceId' => 'CertInstanceId',
        'certName' => 'CertName',
        'cloudName' => 'CloudName',
        'cloudProduct' => 'CloudProduct',
        'cloudRegion' => 'CloudRegion',
        'defaultResource' => 'DefaultResource',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
        'listenerId' => 'ListenerId',
        'namespaceId' => 'NamespaceId',
        'orderId' => 'OrderId',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'resourceCertId' => 'ResourceCertId',
        'resourceDomain' => 'ResourceDomain',
        'resourceId' => 'ResourceId',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certDomain) {
            $res['CertDomain'] = $this->certDomain;
        }

        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->certInstanceId) {
            $res['CertInstanceId'] = $this->certInstanceId;
        }

        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }

        if (null !== $this->cloudProduct) {
            $res['CloudProduct'] = $this->cloudProduct;
        }

        if (null !== $this->cloudRegion) {
            $res['CloudRegion'] = $this->cloudRegion;
        }

        if (null !== $this->defaultResource) {
            $res['DefaultResource'] = $this->defaultResource;
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceCertId) {
            $res['ResourceCertId'] = $this->resourceCertId;
        }

        if (null !== $this->resourceDomain) {
            $res['ResourceDomain'] = $this->resourceDomain;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CertDomain'])) {
            $model->certDomain = $map['CertDomain'];
        }

        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['CertInstanceId'])) {
            $model->certInstanceId = $map['CertInstanceId'];
        }

        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }

        if (isset($map['CloudProduct'])) {
            $model->cloudProduct = $map['CloudProduct'];
        }

        if (isset($map['CloudRegion'])) {
            $model->cloudRegion = $map['CloudRegion'];
        }

        if (isset($map['DefaultResource'])) {
            $model->defaultResource = $map['DefaultResource'];
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceCertId'])) {
            $model->resourceCertId = $map['ResourceCertId'];
        }

        if (isset($map['ResourceDomain'])) {
            $model->resourceDomain = $map['ResourceDomain'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

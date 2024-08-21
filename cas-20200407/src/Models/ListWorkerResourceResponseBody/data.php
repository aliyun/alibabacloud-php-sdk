<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListWorkerResourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The domain name bound to the certificate in the worker task.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $certDomain;

    /**
     * @description The ID of the certificate in the worker task.
     *
     * @example 12073663
     *
     * @var int
     */
    public $certId;

    /**
     * @description The instance ID of the certificate in the worker task.
     *
     * @example lsn-jzk2h0xz5dmynuphb8@1883
     *
     * @var string
     */
    public $certInstanceId;

    /**
     * @description The name of the certificate in the worker task.
     *
     * @example testCertName
     *
     * @var string
     */
    public $certName;

    /**
     * @description The cloud service provider to which the cloud resource in the worker task belongs.
     *
     * >  This parameter is not returned if you deploy certificates to Alibaba Cloud services.
     * @example aliyun
     *
     * @var string
     */
    public $cloudName;

    /**
     * @description The cloud service to which the cloud resource in the worker task belongs. Valid values:
     *
     *   **CDN**: Alibaba Cloud CDN (CDN). This value is supported only at the China site (aliyun.com).
     *   **SLB**: Classic Load Balancer (CLB). This value is supported only at the China site (aliyun.com).
     *   **DCDN**: Dynamic Content Delivery Network (DCDN). This value is supported only at the China site (aliyun.com).
     *   **DDOS**: Anti-DDoS. This value is supported only at the China site (aliyun.com).
     *   **LIVE**: ApsaraVideo Live. This value is supported only at the China site (aliyun.com).
     *   **webHosting**: Cloud Web Hosting. This value is supported only at the China site (aliyun.com).
     *   **VOD**: ApsaraVideo VOD. This value is supported only at the China site (aliyun.com).
     *   **CR**: Container Registry. This value is supported only at the China site (aliyun.com).
     *   **ALB**: Application Load Balancer (ALB).
     *   **APIGateway**: API Gateway.
     *   **FC**: Function Compute.
     *   **GA**: Global Accelerator (GA).
     *   **MSE**: Microservices Engine (MSE).
     *   **NLB**: Network Load Balancer (NLB).
     *   **OSS**: Object Storage Service (OSS).
     *   **SAE**: Serverless App Engine (SAE).
     *   **TencentCDN**: Tencent Cloud Content Delivery Network (CDN).
     *   **WAF**: Web Application Firewall (WAF).
     *
     * @example SLB
     *
     * @var string
     */
    public $cloudProduct;

    /**
     * @description The original region ID of the cloud resource in the worker task. The value is the region ID defined by the cloud service provider. This parameter is required only when you deploy certificates to services of multiple clouds.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $cloudRegion;

    /**
     * @description Indicates whether the cloud resource in the worker task is the default resource. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is returned only when the value of CloudProduct is SLB, NLB, ALB, or GA.
     * @example 0
     *
     * @var bool
     */
    public $defaultResource;

    /**
     * @description The time when the worker task was created. The time is a timestamp in seconds.
     *
     * @example 1680228896000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the worker task was last modified. The time is a timestamp in seconds.
     *
     * @example 1681956830000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the worker task.
     *
     * @example 22487
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the cloud resource in the worker task.
     *
     * >  This parameter is returned only when the value of CloudProduct is SLB, NLB, ALB, or GA.
     * @example cas-cn-0pp118nuu40b
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the deployment task to which the worker task belongs.
     *
     * @example 8888
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The listener ID of the cloud resource in the worker task.
     *
     * >  This parameter is returned only when the value of CloudProduct is SLB, NLB, ALB, or GA.
     * @example lsn-lhl8y7s1e1ngc3m3zz@81
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The ID of the namespace in SAE. This parameter is returned only if you deploy certificates to SAE.
     *
     * @example 32fed52a-4bf7-44f6-955f-e82ada68ef18
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The order ID of the worker task, which is the same as the order ID of the certificate.
     *
     * >  If the CertId parameter is returned, this parameter is not returned.
     * @example 9349278
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The listening port of the cloud resource in the worker task.
     *
     * >  This parameter is returned only when the value of CloudProduct is SLB, NLB, ALB, or GA.
     * @example 4431
     *
     * @var int
     */
    public $port;

    /**
     * @description The region ID of the cloud resource in the worker task.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the certificate that was originally bound to the cloud resource in the worker task.
     *
     * @example 123
     *
     * @var int
     */
    public $resourceCertId;

    /**
     * @description The domain name that was originally bound to the cloud resource in the worker task.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $resourceDomain;

    /**
     * @description The ID of the cloud resource in the worker task.
     *
     * @example 1286999
     *
     * @var int
     */
    public $resourceId;

    /**
     * @description The status of the worker task. Valid values:
     *
     *   **editing**
     *   **pending**
     *   **scheduling**
     *   **processing**
     *   **error**
     *   **success**
     *   **rollback**
     *   **rollback_success**
     *   **rollback_error**
     *
     * @example editing
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the Alibaba Cloud account to which the worker task belongs.
     *
     * @example 1666884372152785
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'certDomain'      => 'CertDomain',
        'certId'          => 'CertId',
        'certInstanceId'  => 'CertInstanceId',
        'certName'        => 'CertName',
        'cloudName'       => 'CloudName',
        'cloudProduct'    => 'CloudProduct',
        'cloudRegion'     => 'CloudRegion',
        'defaultResource' => 'DefaultResource',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'instanceId'      => 'InstanceId',
        'jobId'           => 'JobId',
        'listenerId'      => 'ListenerId',
        'namespaceId'     => 'NamespaceId',
        'orderId'         => 'OrderId',
        'port'            => 'Port',
        'regionId'        => 'RegionId',
        'resourceCertId'  => 'ResourceCertId',
        'resourceDomain'  => 'ResourceDomain',
        'resourceId'      => 'ResourceId',
        'status'          => 'Status',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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

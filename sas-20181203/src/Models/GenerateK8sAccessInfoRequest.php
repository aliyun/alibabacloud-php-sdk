<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GenerateK8sAccessInfoRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example None
     *
     * @var string
     */
    public $aliyunYundunGatewayApiName;

    /**
     * @description This parameter is deprecated.
     *
     * @example None
     *
     * @var string
     */
    public $aliyunYundunGatewayPopName;

    /**
     * @description This parameter is deprecated.
     *
     * @example None
     *
     * @var string
     */
    public $aliyunYundunGatewayProjectName;

    /**
     * @description The Simple Log Service Logstore that is used to store the audit logs.
     *
     * @example audit-cf6baf6afa106eca665296fdf68b65bf
     *
     * @var string
     */
    public $auditLogStore;

    /**
     * @description The Simple Log Service project that is used to store the audit logs.
     *
     * @example k8s-log-custom-huxintest1018-2
     *
     * @var string
     */
    public $auditProject;

    /**
     * @description The ID of the region in which the audit logs are stored.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $auditRegionId;

    /**
     * @description The name of the Kubernetes cluster.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The time at which the container ends to be added.
     *
     * This parameter is required.
     * @example 1711951508388
     *
     * @var int
     */
    public $expireDate;

    /**
     * @description The group ID.
     *
     * This parameter is required.
     * @example 11341690
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The service provider of the cloud asset. Valid values:
     *
     *   **Tencent**
     *   **HUAWEICLOUD**
     *   **Azure**
     *   **AWS**
     *   **Others**
     *
     * This parameter is required.
     * @example Tencent
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'aliyunYundunGatewayApiName'     => 'AliyunYundunGatewayApiName',
        'aliyunYundunGatewayPopName'     => 'AliyunYundunGatewayPopName',
        'aliyunYundunGatewayProjectName' => 'AliyunYundunGatewayProjectName',
        'auditLogStore'                  => 'AuditLogStore',
        'auditProject'                   => 'AuditProject',
        'auditRegionId'                  => 'AuditRegionId',
        'clusterName'                    => 'ClusterName',
        'expireDate'                     => 'ExpireDate',
        'groupId'                        => 'GroupId',
        'vendor'                         => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunYundunGatewayApiName) {
            $res['AliyunYundunGatewayApiName'] = $this->aliyunYundunGatewayApiName;
        }
        if (null !== $this->aliyunYundunGatewayPopName) {
            $res['AliyunYundunGatewayPopName'] = $this->aliyunYundunGatewayPopName;
        }
        if (null !== $this->aliyunYundunGatewayProjectName) {
            $res['AliyunYundunGatewayProjectName'] = $this->aliyunYundunGatewayProjectName;
        }
        if (null !== $this->auditLogStore) {
            $res['AuditLogStore'] = $this->auditLogStore;
        }
        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }
        if (null !== $this->auditRegionId) {
            $res['AuditRegionId'] = $this->auditRegionId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateK8sAccessInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunYundunGatewayApiName'])) {
            $model->aliyunYundunGatewayApiName = $map['AliyunYundunGatewayApiName'];
        }
        if (isset($map['AliyunYundunGatewayPopName'])) {
            $model->aliyunYundunGatewayPopName = $map['AliyunYundunGatewayPopName'];
        }
        if (isset($map['AliyunYundunGatewayProjectName'])) {
            $model->aliyunYundunGatewayProjectName = $map['AliyunYundunGatewayProjectName'];
        }
        if (isset($map['AuditLogStore'])) {
            $model->auditLogStore = $map['AuditLogStore'];
        }
        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }
        if (isset($map['AuditRegionId'])) {
            $model->auditRegionId = $map['AuditRegionId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}

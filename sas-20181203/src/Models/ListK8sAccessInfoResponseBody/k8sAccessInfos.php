<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListK8sAccessInfoResponseBody;

use AlibabaCloud\Tea\Model;

class k8sAccessInfos extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 1960721413485****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The Simple Log Service Logstore that is used to store the audit logs.
     *
     * @example audit-cf6baf6afa106eca665296fdf68b****
     *
     * @var string
     */
    public $auditLogStore;

    /**
     * @description The Simple Log Service project that is used to store the audit logs.
     *
     * @example k8s-log-custom-your-project-sd89eh****
     *
     * @var string
     */
    public $auditProject;

    /**
     * @description The ID of the region in which the server is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $auditRegionId;

    /**
     * @description The ID of the cluster.
     *
     * @example c0da5e4cb82a848c4a57c4dc9f49a****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The expiration time.
     *
     * @example 1690596321613
     *
     * @var int
     */
    public $expireDate;

    /**
     * @description The ID of the server group.
     *
     * @example 11088522
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the server group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The UUID of the access information.
     *
     * @example 67070
     *
     * @var int
     */
    public $id;

    /**
     * @description The installation key of the Kubernetes cluster.
     *
     * @example xxx
     *
     * @var string
     */
    public $installKey;

    /**
     * @description The service provider.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'aliUid'        => 'AliUid',
        'auditLogStore' => 'AuditLogStore',
        'auditProject'  => 'AuditProject',
        'auditRegionId' => 'AuditRegionId',
        'clusterId'     => 'ClusterId',
        'clusterName'   => 'ClusterName',
        'expireDate'    => 'ExpireDate',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'id'            => 'Id',
        'installKey'    => 'InstallKey',
        'vendor'        => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->installKey) {
            $res['InstallKey'] = $this->installKey;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return k8sAccessInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstallKey'])) {
            $model->installKey = $map['InstallKey'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}

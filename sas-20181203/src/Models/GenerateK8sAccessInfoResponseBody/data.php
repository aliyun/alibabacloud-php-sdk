<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GenerateK8sAccessInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 1766185894104***
     *
     * @var int
     */
    public $aliUid;

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
     * @example k8s-log-custom-your-project-sd89ehaaa
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
     * @description The cluster ID.
     *
     * @example c8ca91e0907d94efaba7fb0827eb9****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The cluster name.
     *
     * @example test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The expiration time. Unit: milliseconds.
     *
     * @example 1804230578566
     *
     * @var int
     */
    public $expireDate;

    /**
     * @description The server group ID.
     *
     * @example 11618788
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The installation key of the server.
     *
     * @example BC66185***
     *
     * @var string
     */
    public $installKey;
    protected $_name = [
        'aliUid'        => 'AliUid',
        'auditLogStore' => 'AuditLogStore',
        'auditProject'  => 'AuditProject',
        'auditRegionId' => 'AuditRegionId',
        'clusterId'     => 'ClusterId',
        'clusterName'   => 'ClusterName',
        'expireDate'    => 'ExpireDate',
        'groupId'       => 'GroupId',
        'installKey'    => 'InstallKey',
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
        if (null !== $this->installKey) {
            $res['InstallKey'] = $this->installKey;
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
        if (isset($map['InstallKey'])) {
            $model->installKey = $map['InstallKey'];
        }

        return $model;
    }
}

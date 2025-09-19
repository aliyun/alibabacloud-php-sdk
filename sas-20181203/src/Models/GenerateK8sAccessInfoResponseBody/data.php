<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GenerateK8sAccessInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $auditLogStore;

    /**
     * @var string
     */
    public $auditProject;

    /**
     * @var string
     */
    public $auditRegionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $cpuArch;

    /**
     * @var int
     */
    public $expireDate;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $installKey;
    protected $_name = [
        'aliUid' => 'AliUid',
        'auditLogStore' => 'AuditLogStore',
        'auditProject' => 'AuditProject',
        'auditRegionId' => 'AuditRegionId',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'cpuArch' => 'CpuArch',
        'expireDate' => 'ExpireDate',
        'groupId' => 'GroupId',
        'installKey' => 'InstallKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->cpuArch) {
            $res['CpuArch'] = $this->cpuArch;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
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

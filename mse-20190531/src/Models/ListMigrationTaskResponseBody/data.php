<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListMigrationTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterType;

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
    public $originInstanceAddress;

    /**
     * @var string
     */
    public $originInstanceName;

    /**
     * @var string
     */
    public $originInstanceNamespace;

    /**
     * @var string
     */
    public $projectDesc;

    /**
     * @var string
     */
    public $syncType;

    /**
     * @var string
     */
    public $targetClusterName;

    /**
     * @var string
     */
    public $targetClusterUrl;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'originInstanceAddress' => 'OriginInstanceAddress',
        'originInstanceName' => 'OriginInstanceName',
        'originInstanceNamespace' => 'OriginInstanceNamespace',
        'projectDesc' => 'ProjectDesc',
        'syncType' => 'SyncType',
        'targetClusterName' => 'TargetClusterName',
        'targetClusterUrl' => 'TargetClusterUrl',
        'targetInstanceId' => 'TargetInstanceId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
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

        if (null !== $this->originInstanceAddress) {
            $res['OriginInstanceAddress'] = $this->originInstanceAddress;
        }

        if (null !== $this->originInstanceName) {
            $res['OriginInstanceName'] = $this->originInstanceName;
        }

        if (null !== $this->originInstanceNamespace) {
            $res['OriginInstanceNamespace'] = $this->originInstanceNamespace;
        }

        if (null !== $this->projectDesc) {
            $res['ProjectDesc'] = $this->projectDesc;
        }

        if (null !== $this->syncType) {
            $res['SyncType'] = $this->syncType;
        }

        if (null !== $this->targetClusterName) {
            $res['TargetClusterName'] = $this->targetClusterName;
        }

        if (null !== $this->targetClusterUrl) {
            $res['TargetClusterUrl'] = $this->targetClusterUrl;
        }

        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
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

        if (isset($map['OriginInstanceAddress'])) {
            $model->originInstanceAddress = $map['OriginInstanceAddress'];
        }

        if (isset($map['OriginInstanceName'])) {
            $model->originInstanceName = $map['OriginInstanceName'];
        }

        if (isset($map['OriginInstanceNamespace'])) {
            $model->originInstanceNamespace = $map['OriginInstanceNamespace'];
        }

        if (isset($map['ProjectDesc'])) {
            $model->projectDesc = $map['ProjectDesc'];
        }

        if (isset($map['SyncType'])) {
            $model->syncType = $map['SyncType'];
        }

        if (isset($map['TargetClusterName'])) {
            $model->targetClusterName = $map['TargetClusterName'];
        }

        if (isset($map['TargetClusterUrl'])) {
            $model->targetClusterUrl = $map['TargetClusterUrl'];
        }

        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

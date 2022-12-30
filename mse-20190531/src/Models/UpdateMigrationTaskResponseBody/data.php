<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateMigrationTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Nacos-Ans
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @example 192.168.100.2:2181
     *
     * @var string
     */
    public $originInstanceAddress;

    /**
     * @example src
     *
     * @var string
     */
    public $originInstanceName;

    /**
     * @example fsdfsdfdsf
     *
     * @var string
     */
    public $originInstanceNamespace;

    /**
     * @example 1232345
     *
     * @var string
     */
    public $projectDesc;

    /**
     * @example multiple-naocs
     *
     * @var string
     */
    public $targetClusterName;

    /**
     * @example mse-0b*****-nacos-ans.mse.aliyuncs.com:8848
     *
     * @var string
     */
    public $targetClusterUrl;

    /**
     * @example mse-cn-zvp2u*****
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @example 183876217*****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'clusterType'             => 'ClusterType',
        'gmtCreate'               => 'GmtCreate',
        'gmtModified'             => 'GmtModified',
        'id'                      => 'Id',
        'originInstanceAddress'   => 'OriginInstanceAddress',
        'originInstanceName'      => 'OriginInstanceName',
        'originInstanceNamespace' => 'OriginInstanceNamespace',
        'projectDesc'             => 'ProjectDesc',
        'targetClusterName'       => 'TargetClusterName',
        'targetClusterUrl'        => 'TargetClusterUrl',
        'targetInstanceId'        => 'TargetInstanceId',
        'userId'                  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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

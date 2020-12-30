<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;
use AlibabaCloud\Tea\Model;

class vulRecords extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $modifyTs;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $containerImageId;

    /**
     * @var int
     */
    public $primaryId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var string
     */
    public $containerImageName;

    /**
     * @var string
     */
    public $k8sNodeId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $containerInnerPath;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var extendContentJson
     */
    public $extendContentJson;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $related;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var int
     */
    public $lastTs;

    /**
     * @var int
     */
    public $firstTs;

    /**
     * @var string
     */
    public $necessity;

    /**
     * @var int
     */
    public $repairTs;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $k8sPodName;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $resultMessage;

    /**
     * @var string
     */
    public $k8sNamespace;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $k8sNodeName;

    /**
     * @var string
     */
    public $containerName;
    protected $_name = [
        'status'             => 'Status',
        'type'               => 'Type',
        'modifyTs'           => 'ModifyTs',
        'internetIp'         => 'InternetIp',
        'containerImageId'   => 'ContainerImageId',
        'primaryId'          => 'PrimaryId',
        'tag'                => 'Tag',
        'k8sClusterId'       => 'K8sClusterId',
        'containerImageName' => 'ContainerImageName',
        'k8sNodeId'          => 'K8sNodeId',
        'instanceName'       => 'InstanceName',
        'online'             => 'Online',
        'containerInnerPath' => 'ContainerInnerPath',
        'osVersion'          => 'OsVersion',
        'name'               => 'Name',
        'extendContentJson'  => 'ExtendContentJson',
        'resultCode'         => 'ResultCode',
        'instanceId'         => 'InstanceId',
        'related'            => 'Related',
        'intranetIp'         => 'IntranetIp',
        'lastTs'             => 'LastTs',
        'firstTs'            => 'FirstTs',
        'necessity'          => 'Necessity',
        'repairTs'           => 'RepairTs',
        'uuid'               => 'Uuid',
        'k8sPodName'         => 'K8sPodName',
        'containerId'        => 'ContainerId',
        'groupId'            => 'GroupId',
        'resultMessage'      => 'ResultMessage',
        'k8sNamespace'       => 'K8sNamespace',
        'aliasName'          => 'AliasName',
        'k8sNodeName'        => 'K8sNodeName',
        'containerName'      => 'ContainerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->modifyTs) {
            $res['ModifyTs'] = $this->modifyTs;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->containerImageId) {
            $res['ContainerImageId'] = $this->containerImageId;
        }
        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->containerImageName) {
            $res['ContainerImageName'] = $this->containerImageName;
        }
        if (null !== $this->k8sNodeId) {
            $res['K8sNodeId'] = $this->k8sNodeId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->containerInnerPath) {
            $res['ContainerInnerPath'] = $this->containerInnerPath;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->extendContentJson) {
            $res['ExtendContentJson'] = null !== $this->extendContentJson ? $this->extendContentJson->toMap() : null;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->lastTs) {
            $res['LastTs'] = $this->lastTs;
        }
        if (null !== $this->firstTs) {
            $res['FirstTs'] = $this->firstTs;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->repairTs) {
            $res['RepairTs'] = $this->repairTs;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->k8sPodName) {
            $res['K8sPodName'] = $this->k8sPodName;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }
        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->k8sNodeName) {
            $res['K8sNodeName'] = $this->k8sNodeName;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ModifyTs'])) {
            $model->modifyTs = $map['ModifyTs'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['ContainerImageId'])) {
            $model->containerImageId = $map['ContainerImageId'];
        }
        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['ContainerImageName'])) {
            $model->containerImageName = $map['ContainerImageName'];
        }
        if (isset($map['K8sNodeId'])) {
            $model->k8sNodeId = $map['K8sNodeId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['ContainerInnerPath'])) {
            $model->containerInnerPath = $map['ContainerInnerPath'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ExtendContentJson'])) {
            $model->extendContentJson = extendContentJson::fromMap($map['ExtendContentJson']);
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LastTs'])) {
            $model->lastTs = $map['LastTs'];
        }
        if (isset($map['FirstTs'])) {
            $model->firstTs = $map['FirstTs'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['RepairTs'])) {
            $model->repairTs = $map['RepairTs'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['K8sPodName'])) {
            $model->k8sPodName = $map['K8sPodName'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }
        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['K8sNodeName'])) {
            $model->k8sNodeName = $map['K8sNodeName'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }

        return $model;
    }
}

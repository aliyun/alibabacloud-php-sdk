<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;

class vulRecords extends Model
{
    /**
     * @var string
     */
    public $aliasName;
    /**
     * @var string
     */
    public $authVersion;
    /**
     * @var bool
     */
    public $bind;
    /**
     * @var extendContentJson
     */
    public $extendContentJson;
    /**
     * @var int
     */
    public $firstTs;
    /**
     * @var int
     */
    public $groupId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var string
     */
    public $intranetIp;
    /**
     * @var string
     */
    public $k8sClusterId;
    /**
     * @var string
     */
    public $k8sNamespace;
    /**
     * @var string
     */
    public $k8sNodeId;
    /**
     * @var string
     */
    public $k8sNodeName;
    /**
     * @var string
     */
    public $k8sPodName;
    /**
     * @var int
     */
    public $lastTs;
    /**
     * @var int
     */
    public $modifyTs;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $necessity;
    /**
     * @var bool
     */
    public $online;
    /**
     * @var string
     */
    public $osName;
    /**
     * @var string
     */
    public $osVersion;
    /**
     * @var int
     */
    public $primaryId;
    /**
     * @var int
     */
    public $progress;
    /**
     * @var int
     */
    public $raspDefend;
    /**
     * @var int
     */
    public $raspStatus;
    /**
     * @var bool
     */
    public $realRisk;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $related;
    /**
     * @var int
     */
    public $repairTs;
    /**
     * @var string
     */
    public $resultCode;
    /**
     * @var string
     */
    public $resultMessage;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliasName'         => 'AliasName',
        'authVersion'       => 'AuthVersion',
        'bind'              => 'Bind',
        'extendContentJson' => 'ExtendContentJson',
        'firstTs'           => 'FirstTs',
        'groupId'           => 'GroupId',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'k8sClusterId'      => 'K8sClusterId',
        'k8sNamespace'      => 'K8sNamespace',
        'k8sNodeId'         => 'K8sNodeId',
        'k8sNodeName'       => 'K8sNodeName',
        'k8sPodName'        => 'K8sPodName',
        'lastTs'            => 'LastTs',
        'modifyTs'          => 'ModifyTs',
        'name'              => 'Name',
        'necessity'         => 'Necessity',
        'online'            => 'Online',
        'osName'            => 'OsName',
        'osVersion'         => 'OsVersion',
        'primaryId'         => 'PrimaryId',
        'progress'          => 'Progress',
        'raspDefend'        => 'RaspDefend',
        'raspStatus'        => 'RaspStatus',
        'realRisk'          => 'RealRisk',
        'regionId'          => 'RegionId',
        'related'           => 'Related',
        'repairTs'          => 'RepairTs',
        'resultCode'        => 'ResultCode',
        'resultMessage'     => 'ResultMessage',
        'status'            => 'Status',
        'tag'               => 'Tag',
        'type'              => 'Type',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
        if (null !== $this->extendContentJson) {
            $this->extendContentJson->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }

        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }

        if (null !== $this->extendContentJson) {
            $res['ExtendContentJson'] = null !== $this->extendContentJson ? $this->extendContentJson->toArray($noStream) : $this->extendContentJson;
        }

        if (null !== $this->firstTs) {
            $res['FirstTs'] = $this->firstTs;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }

        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }

        if (null !== $this->k8sNodeId) {
            $res['K8sNodeId'] = $this->k8sNodeId;
        }

        if (null !== $this->k8sNodeName) {
            $res['K8sNodeName'] = $this->k8sNodeName;
        }

        if (null !== $this->k8sPodName) {
            $res['K8sPodName'] = $this->k8sPodName;
        }

        if (null !== $this->lastTs) {
            $res['LastTs'] = $this->lastTs;
        }

        if (null !== $this->modifyTs) {
            $res['ModifyTs'] = $this->modifyTs;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }

        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }

        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->raspDefend) {
            $res['RaspDefend'] = $this->raspDefend;
        }

        if (null !== $this->raspStatus) {
            $res['RaspStatus'] = $this->raspStatus;
        }

        if (null !== $this->realRisk) {
            $res['RealRisk'] = $this->realRisk;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }

        if (null !== $this->repairTs) {
            $res['RepairTs'] = $this->repairTs;
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }

        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }

        if (isset($map['ExtendContentJson'])) {
            $model->extendContentJson = extendContentJson::fromMap($map['ExtendContentJson']);
        }

        if (isset($map['FirstTs'])) {
            $model->firstTs = $map['FirstTs'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }

        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }

        if (isset($map['K8sNodeId'])) {
            $model->k8sNodeId = $map['K8sNodeId'];
        }

        if (isset($map['K8sNodeName'])) {
            $model->k8sNodeName = $map['K8sNodeName'];
        }

        if (isset($map['K8sPodName'])) {
            $model->k8sPodName = $map['K8sPodName'];
        }

        if (isset($map['LastTs'])) {
            $model->lastTs = $map['LastTs'];
        }

        if (isset($map['ModifyTs'])) {
            $model->modifyTs = $map['ModifyTs'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }

        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }

        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RaspDefend'])) {
            $model->raspDefend = $map['RaspDefend'];
        }

        if (isset($map['RaspStatus'])) {
            $model->raspStatus = $map['RaspStatus'];
        }

        if (isset($map['RealRisk'])) {
            $model->realRisk = $map['RealRisk'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }

        if (isset($map['RepairTs'])) {
            $model->repairTs = $map['RepairTs'];
        }

        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

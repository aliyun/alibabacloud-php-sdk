<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\OpenClawInstanceVO\imageInfo;

class OpenClawInstanceVO extends Model
{
    /**
     * @var string
     */
    public $aliyunAccountUid;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $basicAuthPassword;

    /**
     * @var string
     */
    public $basicAuthUsername;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var imageInfo
     */
    public $imageInfo;

    /**
     * @var string
     */
    public $instanceDesc;

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
    public $instanceRegion;

    /**
     * @var string
     */
    public $lastActiveTime;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var string
     */
    public $openclawToken;

    /**
     * @var string
     */
    public $ownerUid;

    /**
     * @var string
     */
    public $publicDomain;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @var string
     */
    public $variables;
    protected $_name = [
        'aliyunAccountUid' => 'AliyunAccountUid',
        'authType' => 'AuthType',
        'basicAuthPassword' => 'BasicAuthPassword',
        'basicAuthUsername' => 'BasicAuthUsername',
        'cpu' => 'Cpu',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'imageInfo' => 'ImageInfo',
        'instanceDesc' => 'InstanceDesc',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceRegion' => 'InstanceRegion',
        'lastActiveTime' => 'LastActiveTime',
        'memorySize' => 'MemorySize',
        'openclawToken' => 'OpenclawToken',
        'ownerUid' => 'OwnerUid',
        'publicDomain' => 'PublicDomain',
        'status' => 'Status',
        'statusDesc' => 'StatusDesc',
        'statusMessage' => 'StatusMessage',
        'variables' => 'Variables',
    ];

    public function validate()
    {
        if (null !== $this->imageInfo) {
            $this->imageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunAccountUid) {
            $res['AliyunAccountUid'] = $this->aliyunAccountUid;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->basicAuthPassword) {
            $res['BasicAuthPassword'] = $this->basicAuthPassword;
        }

        if (null !== $this->basicAuthUsername) {
            $res['BasicAuthUsername'] = $this->basicAuthUsername;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->imageInfo) {
            $res['ImageInfo'] = null !== $this->imageInfo ? $this->imageInfo->toArray($noStream) : $this->imageInfo;
        }

        if (null !== $this->instanceDesc) {
            $res['InstanceDesc'] = $this->instanceDesc;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceRegion) {
            $res['InstanceRegion'] = $this->instanceRegion;
        }

        if (null !== $this->lastActiveTime) {
            $res['LastActiveTime'] = $this->lastActiveTime;
        }

        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }

        if (null !== $this->openclawToken) {
            $res['OpenclawToken'] = $this->openclawToken;
        }

        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }

        if (null !== $this->publicDomain) {
            $res['PublicDomain'] = $this->publicDomain;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }

        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
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
        if (isset($map['AliyunAccountUid'])) {
            $model->aliyunAccountUid = $map['AliyunAccountUid'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['BasicAuthPassword'])) {
            $model->basicAuthPassword = $map['BasicAuthPassword'];
        }

        if (isset($map['BasicAuthUsername'])) {
            $model->basicAuthUsername = $map['BasicAuthUsername'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ImageInfo'])) {
            $model->imageInfo = imageInfo::fromMap($map['ImageInfo']);
        }

        if (isset($map['InstanceDesc'])) {
            $model->instanceDesc = $map['InstanceDesc'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceRegion'])) {
            $model->instanceRegion = $map['InstanceRegion'];
        }

        if (isset($map['LastActiveTime'])) {
            $model->lastActiveTime = $map['LastActiveTime'];
        }

        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }

        if (isset($map['OpenclawToken'])) {
            $model->openclawToken = $map['OpenclawToken'];
        }

        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }

        if (isset($map['PublicDomain'])) {
            $model->publicDomain = $map['PublicDomain'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        return $model;
    }
}

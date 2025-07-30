<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $autoTranscoding;

    /**
     * @example 0
     *
     * @var int
     */
    public $channelId0;

    /**
     * @example 1
     *
     * @var int
     */
    public $channelId1;

    /**
     * @example 1
     *
     * @var int
     */
    public $channelType;

    /**
     * @example 2019-06-20T17:33Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $createType;

    /**
     * @example 3
     *
     * @var int
     */
    public $dataSetType;

    /**
     * @example 0
     *
     * @var int
     */
    public $isDelete;

    /**
     * @example filesFromLocal/ef7ff45c147a4a5e882c925f9a75ac43
     *
     * @var string
     */
    public $roleConfigProp;

    /**
     * @example 1
     *
     * @var int
     */
    public $roleConfigStatus;

    /**
     * @example xx
     *
     * @var string
     */
    public $roleConfigTask;

    /**
     * @example “”
     *
     * @var string
     */
    public $setBucketName;

    /**
     * @example “”
     *
     * @var string
     */
    public $setDomain;

    /**
     * @example “”
     *
     * @var string
     */
    public $setFolderName;

    /**
     * @example 1
     *
     * @var int
     */
    public $setId;

    /**
     * @var string
     */
    public $setName;

    /**
     * @example 1
     *
     * @var int
     */
    public $setNumber;

    /**
     * @example “”
     *
     * @var string
     */
    public $setRoleArn;

    /**
     * @example 1
     *
     * @var int
     */
    public $setType;

    /**
     * @example 11
     *
     * @var int
     */
    public $sourceDataType;

    /**
     * @example xx
     *
     * @var string
     */
    public $subDir;

    /**
     * @example 2022-05-10T10:34Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $userGroup;
    protected $_name = [
        'autoTranscoding' => 'AutoTranscoding',
        'channelId0' => 'ChannelId0',
        'channelId1' => 'ChannelId1',
        'channelType' => 'ChannelType',
        'createTime' => 'CreateTime',
        'createType' => 'CreateType',
        'dataSetType' => 'DataSetType',
        'isDelete' => 'IsDelete',
        'roleConfigProp' => 'RoleConfigProp',
        'roleConfigStatus' => 'RoleConfigStatus',
        'roleConfigTask' => 'RoleConfigTask',
        'setBucketName' => 'SetBucketName',
        'setDomain' => 'SetDomain',
        'setFolderName' => 'SetFolderName',
        'setId' => 'SetId',
        'setName' => 'SetName',
        'setNumber' => 'SetNumber',
        'setRoleArn' => 'SetRoleArn',
        'setType' => 'SetType',
        'sourceDataType' => 'SourceDataType',
        'subDir' => 'SubDir',
        'updateTime' => 'UpdateTime',
        'userGroup' => 'UserGroup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoTranscoding) {
            $res['AutoTranscoding'] = $this->autoTranscoding;
        }
        if (null !== $this->channelId0) {
            $res['ChannelId0'] = $this->channelId0;
        }
        if (null !== $this->channelId1) {
            $res['ChannelId1'] = $this->channelId1;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }
        if (null !== $this->dataSetType) {
            $res['DataSetType'] = $this->dataSetType;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->roleConfigProp) {
            $res['RoleConfigProp'] = $this->roleConfigProp;
        }
        if (null !== $this->roleConfigStatus) {
            $res['RoleConfigStatus'] = $this->roleConfigStatus;
        }
        if (null !== $this->roleConfigTask) {
            $res['RoleConfigTask'] = $this->roleConfigTask;
        }
        if (null !== $this->setBucketName) {
            $res['SetBucketName'] = $this->setBucketName;
        }
        if (null !== $this->setDomain) {
            $res['SetDomain'] = $this->setDomain;
        }
        if (null !== $this->setFolderName) {
            $res['SetFolderName'] = $this->setFolderName;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->setName) {
            $res['SetName'] = $this->setName;
        }
        if (null !== $this->setNumber) {
            $res['SetNumber'] = $this->setNumber;
        }
        if (null !== $this->setRoleArn) {
            $res['SetRoleArn'] = $this->setRoleArn;
        }
        if (null !== $this->setType) {
            $res['SetType'] = $this->setType;
        }
        if (null !== $this->sourceDataType) {
            $res['SourceDataType'] = $this->sourceDataType;
        }
        if (null !== $this->subDir) {
            $res['SubDir'] = $this->subDir;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userGroup) {
            $res['UserGroup'] = $this->userGroup;
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
        if (isset($map['AutoTranscoding'])) {
            $model->autoTranscoding = $map['AutoTranscoding'];
        }
        if (isset($map['ChannelId0'])) {
            $model->channelId0 = $map['ChannelId0'];
        }
        if (isset($map['ChannelId1'])) {
            $model->channelId1 = $map['ChannelId1'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }
        if (isset($map['DataSetType'])) {
            $model->dataSetType = $map['DataSetType'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['RoleConfigProp'])) {
            $model->roleConfigProp = $map['RoleConfigProp'];
        }
        if (isset($map['RoleConfigStatus'])) {
            $model->roleConfigStatus = $map['RoleConfigStatus'];
        }
        if (isset($map['RoleConfigTask'])) {
            $model->roleConfigTask = $map['RoleConfigTask'];
        }
        if (isset($map['SetBucketName'])) {
            $model->setBucketName = $map['SetBucketName'];
        }
        if (isset($map['SetDomain'])) {
            $model->setDomain = $map['SetDomain'];
        }
        if (isset($map['SetFolderName'])) {
            $model->setFolderName = $map['SetFolderName'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['SetName'])) {
            $model->setName = $map['SetName'];
        }
        if (isset($map['SetNumber'])) {
            $model->setNumber = $map['SetNumber'];
        }
        if (isset($map['SetRoleArn'])) {
            $model->setRoleArn = $map['SetRoleArn'];
        }
        if (isset($map['SetType'])) {
            $model->setType = $map['SetType'];
        }
        if (isset($map['SourceDataType'])) {
            $model->sourceDataType = $map['SourceDataType'];
        }
        if (isset($map['SubDir'])) {
            $model->subDir = $map['SubDir'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserGroup'])) {
            $model->userGroup = $map['UserGroup'];
        }

        return $model;
    }
}

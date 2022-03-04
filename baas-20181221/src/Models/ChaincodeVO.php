<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class ChaincodeVO extends Model
{
    /**
     * @description 链码定义ID
     *
     * @var string
     */
    public $chaincodeDefinitionId;

    /**
     * @description 链码ID
     *
     * @var string
     */
    public $chaincodeId;

    /**
     * @description 链码包ID
     *
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @description 通道ID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 通道名称
     *
     * @var string
     */
    public $channelName;

    /**
     * @description 联盟ID
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 安装部署时间
     *
     * @var string
     */
    public $deployTime;

    /**
     * @description 背书策略
     *
     * @var string
     */
    public $endorsePolicy;

    /**
     * @description 是否需要初始化
     *
     * @var bool
     */
    public $initRequired;

    /**
     * @description 链码初始化参数
     *
     * @var string
     */
    public $input;

    /**
     * @description 链码是否安装
     *
     * @var bool
     */
    public $install;

    /**
     * @description 是否是管理链码
     *
     * @var bool
     */
    public $management;

    /**
     * @description 信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 链码包名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 链码路径
     *
     * @var string
     */
    public $path;

    /**
     * @description 上传者ID
     *
     * @var string
     */
    public $providerId;

    /**
     * @description 链码上传者
     *
     * @var string
     */
    public $providerName;

    /**
     * @description 链码状态
     *
     * @var string
     */
    public $state;

    /**
     * @description 链码类型
     *
     * @var int
     */
    public $type;

    /**
     * @description 链码包版本
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'chaincodeDefinitionId' => 'ChaincodeDefinitionId',
        'chaincodeId'           => 'ChaincodeId',
        'chaincodePackageId'    => 'ChaincodePackageId',
        'channelId'             => 'ChannelId',
        'channelName'           => 'ChannelName',
        'consortiumId'          => 'ConsortiumId',
        'createTime'            => 'CreateTime',
        'deployTime'            => 'DeployTime',
        'endorsePolicy'         => 'EndorsePolicy',
        'initRequired'          => 'InitRequired',
        'input'                 => 'Input',
        'install'               => 'Install',
        'management'            => 'Management',
        'message'               => 'Message',
        'name'                  => 'Name',
        'path'                  => 'Path',
        'providerId'            => 'ProviderId',
        'providerName'          => 'ProviderName',
        'state'                 => 'State',
        'type'                  => 'Type',
        'version'               => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodeDefinitionId) {
            $res['ChaincodeDefinitionId'] = $this->chaincodeDefinitionId;
        }
        if (null !== $this->chaincodeId) {
            $res['ChaincodeId'] = $this->chaincodeId;
        }
        if (null !== $this->chaincodePackageId) {
            $res['ChaincodePackageId'] = $this->chaincodePackageId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }
        if (null !== $this->endorsePolicy) {
            $res['EndorsePolicy'] = $this->endorsePolicy;
        }
        if (null !== $this->initRequired) {
            $res['InitRequired'] = $this->initRequired;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->install) {
            $res['Install'] = $this->install;
        }
        if (null !== $this->management) {
            $res['Management'] = $this->management;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
        }
        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChaincodeVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodeDefinitionId'])) {
            $model->chaincodeDefinitionId = $map['ChaincodeDefinitionId'];
        }
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
        }
        if (isset($map['ChaincodePackageId'])) {
            $model->chaincodePackageId = $map['ChaincodePackageId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }
        if (isset($map['EndorsePolicy'])) {
            $model->endorsePolicy = $map['EndorsePolicy'];
        }
        if (isset($map['InitRequired'])) {
            $model->initRequired = $map['InitRequired'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Install'])) {
            $model->install = $map['Install'];
        }
        if (isset($map['Management'])) {
            $model->management = $map['Management'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }
        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

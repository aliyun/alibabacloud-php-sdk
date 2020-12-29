<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumChaincodesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $endorsePolicy;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $chaincodeId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $chaincodeName;

    /**
     * @var string
     */
    public $input;

    /**
     * @var bool
     */
    public $install;

    /**
     * @var string
     */
    public $providerId;

    /**
     * @var string
     */
    public $deployTime;

    /**
     * @var string
     */
    public $chaincodeVersion;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'type'             => 'Type',
        'endorsePolicy'    => 'EndorsePolicy',
        'state'            => 'State',
        'createTime'       => 'CreateTime',
        'chaincodeId'      => 'ChaincodeId',
        'message'          => 'Message',
        'providerName'     => 'ProviderName',
        'chaincodeName'    => 'ChaincodeName',
        'input'            => 'Input',
        'install'          => 'Install',
        'providerId'       => 'ProviderId',
        'deployTime'       => 'DeployTime',
        'chaincodeVersion' => 'ChaincodeVersion',
        'consortiumId'     => 'ConsortiumId',
        'channelName'      => 'ChannelName',
        'channelId'        => 'ChannelId',
        'path'             => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->endorsePolicy) {
            $res['EndorsePolicy'] = $this->endorsePolicy;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->chaincodeId) {
            $res['ChaincodeId'] = $this->chaincodeId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }
        if (null !== $this->chaincodeName) {
            $res['ChaincodeName'] = $this->chaincodeName;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->install) {
            $res['Install'] = $this->install;
        }
        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }
        if (null !== $this->chaincodeVersion) {
            $res['ChaincodeVersion'] = $this->chaincodeVersion;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['EndorsePolicy'])) {
            $model->endorsePolicy = $map['EndorsePolicy'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }
        if (isset($map['ChaincodeName'])) {
            $model->chaincodeName = $map['ChaincodeName'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Install'])) {
            $model->install = $map['Install'];
        }
        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }
        if (isset($map['ChaincodeVersion'])) {
            $model->chaincodeVersion = $map['ChaincodeVersion'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}

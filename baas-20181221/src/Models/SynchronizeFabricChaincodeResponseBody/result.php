<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\SynchronizeFabricChaincodeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $chaincodeId;

    /**
     * @var string
     */
    public $chaincodeName;

    /**
     * @var string
     */
    public $chaincodeVersion;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deployTime;

    /**
     * @var string
     */
    public $endorsePolicy;

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
    public $message;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $providerId;

    /**
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'chaincodeId'      => 'ChaincodeId',
        'chaincodeName'    => 'ChaincodeName',
        'chaincodeVersion' => 'ChaincodeVersion',
        'channelName'      => 'ChannelName',
        'consortiumId'     => 'ConsortiumId',
        'createTime'       => 'CreateTime',
        'deployTime'       => 'DeployTime',
        'endorsePolicy'    => 'EndorsePolicy',
        'input'            => 'Input',
        'install'          => 'Install',
        'message'          => 'Message',
        'path'             => 'Path',
        'providerId'       => 'ProviderId',
        'providerName'     => 'ProviderName',
        'state'            => 'State',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodeId) {
            $res['ChaincodeId'] = $this->chaincodeId;
        }
        if (null !== $this->chaincodeName) {
            $res['ChaincodeName'] = $this->chaincodeName;
        }
        if (null !== $this->chaincodeVersion) {
            $res['ChaincodeVersion'] = $this->chaincodeVersion;
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
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->install) {
            $res['Install'] = $this->install;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
        }
        if (isset($map['ChaincodeName'])) {
            $model->chaincodeName = $map['ChaincodeName'];
        }
        if (isset($map['ChaincodeVersion'])) {
            $model->chaincodeVersion = $map['ChaincodeVersion'];
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
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Install'])) {
            $model->install = $map['Install'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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

        return $model;
    }
}

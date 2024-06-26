<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\SynchronizeChaincodeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example code-sacc-1pr09q7jm****
     *
     * @var string
     */
    public $chaincodeId;

    /**
     * @example chan-channelx-1l1hmckuuisxo
     *
     * @var string
     */
    public $channelName;

    /**
     * @example consortium-lianmenyumingyi-hc5d1bwl****
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $deployTime;

    /**
     * @example OR (\\"aaaaaa1MSP.peer\\")
     *
     * @var string
     */
    public $endorsePolicy;

    /**
     * @example input
     *
     * @var string
     */
    public $input;

    /**
     * @example false
     *
     * @var bool
     */
    public $install;

    /**
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @example sacc
     *
     * @var string
     */
    public $name;

    /**
     * @example go-sdk-demo/chaincode/src
     *
     * @var string
     */
    public $path;

    /**
     * @example provider
     *
     * @var string
     */
    public $providerId;

    /**
     * @example name
     *
     * @var string
     */
    public $providerName;

    /**
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'chaincodeId'   => 'ChaincodeId',
        'channelName'   => 'ChannelName',
        'consortiumId'  => 'ConsortiumId',
        'createTime'    => 'CreateTime',
        'deployTime'    => 'DeployTime',
        'endorsePolicy' => 'EndorsePolicy',
        'input'         => 'Input',
        'install'       => 'Install',
        'message'       => 'Message',
        'name'          => 'Name',
        'path'          => 'Path',
        'providerId'    => 'ProviderId',
        'providerName'  => 'ProviderName',
        'state'         => 'State',
        'type'          => 'Type',
        'version'       => 'Version',
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
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

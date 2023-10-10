<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class ChaincodeVO extends Model
{
    /**
     * @example a5f04baed775b016e8dc386783f40a2c8b13823cac22bc5fd11846cca4a13a9a
     *
     * @var string
     */
    public $chaincodeDefinitionId;

    /**
     * @example code-sacc-jbkuldd3i7ad
     *
     * @var string
     */
    public $chaincodeId;

    /**
     * @example sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860
     *
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @example chan-test-b0wx5suhgyb9p
     *
     * @var string
     */
    public $channelId;

    /**
     * @example f100
     *
     * @var string
     */
    public $channelName;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
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
     * @example OR ("perf9141MSP.member")
     *
     * @var string
     */
    public $endorsePolicy;

    /**
     * @example false
     *
     * @var bool
     */
    public $initRequired;

    /**
     * @example args:"key" args:"val"
     *
     * @var string
     */
    public $input;

    /**
     * @example true
     *
     * @var bool
     */
    public $install;

    /**
     * @example false
     *
     * @var bool
     */
    public $management;

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
     * @example chaincode/sacc
     *
     * @var string
     */
    public $path;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $providerId;

    /**
     * @example perf9141
     *
     * @var string
     */
    public $providerName;

    /**
     * @example Pending
     *
     * @var string
     */
    public $state;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @example 1.1
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

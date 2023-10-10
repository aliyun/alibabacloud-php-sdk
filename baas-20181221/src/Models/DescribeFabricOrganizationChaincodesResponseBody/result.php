<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationChaincodesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example code-sacc-1pr09q7jmo0np
     *
     * @var string
     */
    public $chaincodeId;

    /**
     * @example mycc
     *
     * @var string
     */
    public $chaincodeName;

    /**
     * @example 0.3
     *
     * @var string
     */
    public $chaincodeVersion;

    /**
     * @example chan-first-channel-31hlgpen5k5lig
     *
     * @var string
     */
    public $channelId;

    /**
     * @example first-channel
     *
     * @var string
     */
    public $channelName;

    /**
     * @example consortium-lianmenyumingyi-hc5d1bwlulg7
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
     * @example uid-23425
     *
     * @var string
     */
    public $creator;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $deployTime;

    /**
     * @example OR (&#39;perf9141MSP.member&#39;)
     *
     * @var string
     */
    public $endorsePolicy;

    /**
     * @example Installed
     *
     * @var string
     */
    public $installed;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'chaincodeId'      => 'ChaincodeId',
        'chaincodeName'    => 'ChaincodeName',
        'chaincodeVersion' => 'ChaincodeVersion',
        'channelId'        => 'ChannelId',
        'channelName'      => 'ChannelName',
        'consortiumId'     => 'ConsortiumId',
        'createTime'       => 'CreateTime',
        'creator'          => 'Creator',
        'deployTime'       => 'DeployTime',
        'endorsePolicy'    => 'EndorsePolicy',
        'installed'        => 'Installed',
        'message'          => 'Message',
        'state'            => 'State',
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
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }
        if (null !== $this->endorsePolicy) {
            $res['EndorsePolicy'] = $this->endorsePolicy;
        }
        if (null !== $this->installed) {
            $res['Installed'] = $this->installed;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }
        if (isset($map['EndorsePolicy'])) {
            $model->endorsePolicy = $map['EndorsePolicy'];
        }
        if (isset($map['Installed'])) {
            $model->installed = $map['Installed'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}

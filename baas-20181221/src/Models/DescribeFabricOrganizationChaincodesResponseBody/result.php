<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationChaincodesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
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
    public $chaincodeName;

    /**
     * @var string
     */
    public $installed;

    /**
     * @var string
     */
    public $creator;

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
    public $channelName;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $channelId;
    protected $_name = [
        'endorsePolicy'    => 'EndorsePolicy',
        'state'            => 'State',
        'createTime'       => 'CreateTime',
        'chaincodeId'      => 'ChaincodeId',
        'message'          => 'Message',
        'chaincodeName'    => 'ChaincodeName',
        'installed'        => 'Installed',
        'creator'          => 'Creator',
        'deployTime'       => 'DeployTime',
        'chaincodeVersion' => 'ChaincodeVersion',
        'channelName'      => 'ChannelName',
        'consortiumId'     => 'ConsortiumId',
        'channelId'        => 'ChannelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->chaincodeName) {
            $res['ChaincodeName'] = $this->chaincodeName;
        }
        if (null !== $this->installed) {
            $res['Installed'] = $this->installed;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
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
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
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
        if (isset($map['ChaincodeName'])) {
            $model->chaincodeName = $map['ChaincodeName'];
        }
        if (isset($map['Installed'])) {
            $model->installed = $map['Installed'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        return $model;
    }
}

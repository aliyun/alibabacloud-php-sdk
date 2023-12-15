<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChannelChaincodesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $binding;

    /**
     * @var string
     */
    public $chaincodeId;

    /**
     * @var string
     */
    public $channelId;

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
    public $creator;

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
    public $installed;

    /**
     * @var bool
     */
    public $management;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'binding'       => 'Binding',
        'chaincodeId'   => 'ChaincodeId',
        'channelId'     => 'ChannelId',
        'channelName'   => 'ChannelName',
        'consortiumId'  => 'ConsortiumId',
        'createTime'    => 'CreateTime',
        'creator'       => 'Creator',
        'deployTime'    => 'DeployTime',
        'endorsePolicy' => 'EndorsePolicy',
        'installed'     => 'Installed',
        'management'    => 'Management',
        'message'       => 'Message',
        'name'          => 'Name',
        'state'         => 'State',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->binding) {
            $res['Binding'] = $this->binding;
        }
        if (null !== $this->chaincodeId) {
            $res['ChaincodeId'] = $this->chaincodeId;
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
        if (null !== $this->management) {
            $res['Management'] = $this->management;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['Binding'])) {
            $model->binding = $map['Binding'];
        }
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
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
        if (isset($map['Management'])) {
            $model->management = $map['Management'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

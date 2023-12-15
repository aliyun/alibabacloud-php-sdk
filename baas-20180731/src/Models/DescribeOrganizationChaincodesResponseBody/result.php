<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationChaincodesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $binding;

    /**
     * @example code-sacc-1pr09q7jmo0np
     *
     * @var string
     */
    public $chaincodeId;

    /**
     * @var string
     */
    public $chaincodePackageId;

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
     * @var bool
     */
    public $management;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example mycc
     *
     * @var string
     */
    public $name;

    /**
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @example 0.3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'binding'            => 'Binding',
        'chaincodeId'        => 'ChaincodeId',
        'chaincodePackageId' => 'ChaincodePackageId',
        'channelId'          => 'ChannelId',
        'channelName'        => 'ChannelName',
        'consortiumId'       => 'ConsortiumId',
        'createTime'         => 'CreateTime',
        'creator'            => 'Creator',
        'deployTime'         => 'DeployTime',
        'endorsePolicy'      => 'EndorsePolicy',
        'installed'          => 'Installed',
        'management'         => 'Management',
        'message'            => 'Message',
        'name'               => 'Name',
        'state'              => 'State',
        'version'            => 'Version',
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

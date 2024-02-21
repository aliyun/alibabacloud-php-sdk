<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceConfigHistoryResponseBody\configHistoryList;

use AlibabaCloud\Tea\Model;

class configHistory extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $applied;

    /**
     * @example 1111
     *
     * @var string
     */
    public $author;

    /**
     * @example modifyConfig
     *
     * @var string
     */
    public $comment;

    /**
     * @example tez-site
     *
     * @var string
     */
    public $configFileName;

    /**
     * @example tez.am.resource.memory.mb
     *
     * @var string
     */
    public $configItemName;

    /**
     * @example 1543320502944
     *
     * @var string
     */
    public $configVersion;

    /**
     * @example 1543320503000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example G-A5EA210E15FC****
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $hostGroupName;

    /**
     * @example i-bp146tnrkq4tcso2****
     *
     * @var string
     */
    public $hostInstanceId;

    /**
     * @example emr-header-1
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 1280
     *
     * @var string
     */
    public $newValue;

    /**
     * @example 640
     *
     * @var string
     */
    public $oldValue;

    /**
     * @example TEZ
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'applied'        => 'Applied',
        'author'         => 'Author',
        'comment'        => 'Comment',
        'configFileName' => 'ConfigFileName',
        'configItemName' => 'ConfigItemName',
        'configVersion'  => 'ConfigVersion',
        'createTime'     => 'CreateTime',
        'hostGroupId'    => 'HostGroupId',
        'hostGroupName'  => 'HostGroupName',
        'hostInstanceId' => 'HostInstanceId',
        'hostName'       => 'HostName',
        'newValue'       => 'NewValue',
        'oldValue'       => 'OldValue',
        'serviceName'    => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applied) {
            $res['Applied'] = $this->applied;
        }
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }
        if (null !== $this->configItemName) {
            $res['ConfigItemName'] = $this->configItemName;
        }
        if (null !== $this->configVersion) {
            $res['ConfigVersion'] = $this->configVersion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applied'])) {
            $model->applied = $map['Applied'];
        }
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }
        if (isset($map['ConfigItemName'])) {
            $model->configItemName = $map['ConfigItemName'];
        }
        if (isset($map['ConfigVersion'])) {
            $model->configVersion = $map['ConfigVersion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}

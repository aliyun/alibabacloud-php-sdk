<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceConfigHistoryResponseBody\configHistoryList;

use AlibabaCloud\Tea\Model;

class configHistory extends Model
{
    /**
     * @var string
     */
    public $oldValue;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $configItemName;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $newValue;

    /**
     * @var string
     */
    public $hostInstanceId;

    /**
     * @var string
     */
    public $configFileName;

    /**
     * @var bool
     */
    public $applied;

    /**
     * @var string
     */
    public $configVersion;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $hostGroupName;
    protected $_name = [
        'oldValue'       => 'OldValue',
        'comment'        => 'Comment',
        'createTime'     => 'CreateTime',
        'author'         => 'Author',
        'hostName'       => 'HostName',
        'configItemName' => 'ConfigItemName',
        'hostGroupId'    => 'HostGroupId',
        'newValue'       => 'NewValue',
        'hostInstanceId' => 'HostInstanceId',
        'configFileName' => 'ConfigFileName',
        'applied'        => 'Applied',
        'configVersion'  => 'ConfigVersion',
        'serviceName'    => 'ServiceName',
        'hostGroupName'  => 'HostGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->configItemName) {
            $res['ConfigItemName'] = $this->configItemName;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
        }
        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }
        if (null !== $this->applied) {
            $res['Applied'] = $this->applied;
        }
        if (null !== $this->configVersion) {
            $res['ConfigVersion'] = $this->configVersion;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
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
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ConfigItemName'])) {
            $model->configItemName = $map['ConfigItemName'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
        }
        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }
        if (isset($map['Applied'])) {
            $model->applied = $map['Applied'];
        }
        if (isset($map['ConfigVersion'])) {
            $model->configVersion = $map['ConfigVersion'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListApplicationConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class applicationConfigs extends Model
{
    /**
     * @description 应用名称。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 配置值生效状态。
     *
     * @example EFFECT
     *
     * @var string
     */
    public $configEffectState;

    /**
     * @description 配置文件名称。
     *
     * @example hdfs-site.xml
     *
     * @var string
     */
    public $configFileName;

    /**
     * @description 配置项键。
     *
     * @example dfs.replication
     *
     * @var string
     */
    public $configItemKey;

    /**
     * @description 配置项值。
     *
     * @example 2
     *
     * @var string
     */
    public $configItemValue;

    /**
     * @description 创建时间。
     *
     * @example 1628589439114
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 是否是自定义配置。
     *
     * @example false
     *
     * @var bool
     */
    public $custom;

    /**
     * @description 描述。
     *
     * @example dfs.replication description
     *
     * @var string
     */
    public $description;

    /**
     * @description 初始值。
     *
     * @example 2
     *
     * @var string
     */
    public $initValue;

    /**
     * @description 修改人。
     *
     * @example 170906468757****
     *
     * @var string
     */
    public $modifier;

    /**
     * @description 节点组ID。
     *
     * @example ng-d555335ced5****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 节点ID。
     *
     * @example i-bp18y0ng3qqxog4mw****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description 更新时间。
     *
     * @example 1628589439114
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'applicationName'   => 'ApplicationName',
        'configEffectState' => 'ConfigEffectState',
        'configFileName'    => 'ConfigFileName',
        'configItemKey'     => 'ConfigItemKey',
        'configItemValue'   => 'ConfigItemValue',
        'createTime'        => 'CreateTime',
        'custom'            => 'Custom',
        'description'       => 'Description',
        'initValue'         => 'InitValue',
        'modifier'          => 'Modifier',
        'nodeGroupId'       => 'NodeGroupId',
        'nodeId'            => 'NodeId',
        'updateTime'        => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->configEffectState) {
            $res['ConfigEffectState'] = $this->configEffectState;
        }
        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }
        if (null !== $this->configItemKey) {
            $res['ConfigItemKey'] = $this->configItemKey;
        }
        if (null !== $this->configItemValue) {
            $res['ConfigItemValue'] = $this->configItemValue;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->custom) {
            $res['Custom'] = $this->custom;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->initValue) {
            $res['InitValue'] = $this->initValue;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ConfigEffectState'])) {
            $model->configEffectState = $map['ConfigEffectState'];
        }
        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }
        if (isset($map['ConfigItemKey'])) {
            $model->configItemKey = $map['ConfigItemKey'];
        }
        if (isset($map['ConfigItemValue'])) {
            $model->configItemValue = $map['ConfigItemValue'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Custom'])) {
            $model->custom = $map['Custom'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InitValue'])) {
            $model->initValue = $map['InitValue'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

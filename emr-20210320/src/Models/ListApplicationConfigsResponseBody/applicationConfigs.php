<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListApplicationConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class applicationConfigs extends Model
{
    /**
     * @var string
     */
    public $applicationName;
    /**
     * @var string
     */
    public $configEffectState;
    /**
     * @var string
     */
    public $configFileName;
    /**
     * @var string
     */
    public $configItemKey;
    /**
     * @var string
     */
    public $configItemValue;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var bool
     */
    public $custom;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $initValue;
    /**
     * @var string
     */
    public $modifier;
    /**
     * @var string
     */
    public $nodeGroupId;
    /**
     * @var string
     */
    public $nodeId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class DatasetJobConfig extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $datasetJobConfigId;

    /**
     * @var string
     */
    public $datasetVersion;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'config' => 'Config',
        'configType' => 'ConfigType',
        'createTime' => 'CreateTime',
        'datasetJobConfigId' => 'DatasetJobConfigId',
        'datasetVersion' => 'DatasetVersion',
        'modifyTime' => 'ModifyTime',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->datasetJobConfigId) {
            $res['DatasetJobConfigId'] = $this->datasetJobConfigId;
        }

        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = $this->datasetVersion;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DatasetJobConfigId'])) {
            $model->datasetJobConfigId = $map['DatasetJobConfigId'];
        }

        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = $map['DatasetVersion'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

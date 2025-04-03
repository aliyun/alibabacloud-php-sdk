<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetResponseBody\data\datasetConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetResponseBody\data\documentHandleConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var datasetConfig
     */
    public $datasetConfig;

    /**
     * @var string
     */
    public $datasetDescription;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $datasetType;

    /**
     * @var documentHandleConfig
     */
    public $documentHandleConfig;

    /**
     * @var int
     */
    public $searchDatasetEnable;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'datasetConfig' => 'DatasetConfig',
        'datasetDescription' => 'DatasetDescription',
        'datasetId' => 'DatasetId',
        'datasetName' => 'DatasetName',
        'datasetType' => 'DatasetType',
        'documentHandleConfig' => 'DocumentHandleConfig',
        'searchDatasetEnable' => 'SearchDatasetEnable',
    ];

    public function validate()
    {
        if (null !== $this->datasetConfig) {
            $this->datasetConfig->validate();
        }
        if (null !== $this->documentHandleConfig) {
            $this->documentHandleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->datasetConfig) {
            $res['DatasetConfig'] = null !== $this->datasetConfig ? $this->datasetConfig->toArray($noStream) : $this->datasetConfig;
        }

        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }

        if (null !== $this->documentHandleConfig) {
            $res['DocumentHandleConfig'] = null !== $this->documentHandleConfig ? $this->documentHandleConfig->toArray($noStream) : $this->documentHandleConfig;
        }

        if (null !== $this->searchDatasetEnable) {
            $res['SearchDatasetEnable'] = $this->searchDatasetEnable;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['DatasetConfig'])) {
            $model->datasetConfig = datasetConfig::fromMap($map['DatasetConfig']);
        }

        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }

        if (isset($map['DocumentHandleConfig'])) {
            $model->documentHandleConfig = documentHandleConfig::fromMap($map['DocumentHandleConfig']);
        }

        if (isset($map['SearchDatasetEnable'])) {
            $model->searchDatasetEnable = $map['SearchDatasetEnable'];
        }

        return $model;
    }
}

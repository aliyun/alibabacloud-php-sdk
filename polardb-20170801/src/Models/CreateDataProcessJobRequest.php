<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateDataProcessJobRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationConfig;

    /**
     * @var string
     */
    public $destinationId;

    /**
     * @var string
     */
    public $destinationPath;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $processingMode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceConfig;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'description' => 'Description',
        'destinationConfig' => 'DestinationConfig',
        'destinationId' => 'DestinationId',
        'destinationPath' => 'DestinationPath',
        'destinationType' => 'DestinationType',
        'modelName' => 'ModelName',
        'processingMode' => 'ProcessingMode',
        'regionId' => 'RegionId',
        'sourceConfig' => 'SourceConfig',
        'sourceId' => 'SourceId',
        'sourcePath' => 'SourcePath',
        'sourceType' => 'SourceType',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationConfig) {
            $res['DestinationConfig'] = $this->destinationConfig;
        }

        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }

        if (null !== $this->destinationPath) {
            $res['DestinationPath'] = $this->destinationPath;
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->processingMode) {
            $res['ProcessingMode'] = $this->processingMode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourceConfig) {
            $res['SourceConfig'] = $this->sourceConfig;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourcePath) {
            $res['SourcePath'] = $this->sourcePath;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationConfig'])) {
            $model->destinationConfig = $map['DestinationConfig'];
        }

        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }

        if (isset($map['DestinationPath'])) {
            $model->destinationPath = $map['DestinationPath'];
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ProcessingMode'])) {
            $model->processingMode = $map['ProcessingMode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourceConfig'])) {
            $model->sourceConfig = $map['SourceConfig'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourcePath'])) {
            $model->sourcePath = $map['SourcePath'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}

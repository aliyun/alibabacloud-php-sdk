<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDatasetRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDatasetRequest\createCommand\versionConfig;

class createCommand extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $dataCellId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dirName;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $metadataStorageType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;

    /**
     * @var versionConfig
     */
    public $versionConfig;
    protected $_name = [
        'contentType' => 'ContentType',
        'dataCellId' => 'DataCellId',
        'description' => 'Description',
        'dirName' => 'DirName',
        'fileId' => 'FileId',
        'metadataStorageType' => 'MetadataStorageType',
        'name' => 'Name',
        'owner' => 'Owner',
        'scenario' => 'Scenario',
        'storageType' => 'StorageType',
        'type' => 'Type',
        'version' => 'Version',
        'versionConfig' => 'VersionConfig',
    ];

    public function validate()
    {
        if (null !== $this->versionConfig) {
            $this->versionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->dataCellId) {
            $res['DataCellId'] = $this->dataCellId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dirName) {
            $res['DirName'] = $this->dirName;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->metadataStorageType) {
            $res['MetadataStorageType'] = $this->metadataStorageType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->versionConfig) {
            $res['VersionConfig'] = null !== $this->versionConfig ? $this->versionConfig->toArray($noStream) : $this->versionConfig;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['DataCellId'])) {
            $model->dataCellId = $map['DataCellId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DirName'])) {
            $model->dirName = $map['DirName'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['MetadataStorageType'])) {
            $model->metadataStorageType = $map['MetadataStorageType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionConfig'])) {
            $model->versionConfig = versionConfig::fromMap($map['VersionConfig']);
        }

        return $model;
    }
}

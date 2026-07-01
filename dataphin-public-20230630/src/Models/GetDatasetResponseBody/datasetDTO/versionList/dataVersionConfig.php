<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDatasetResponseBody\datasetDTO\versionList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDatasetResponseBody\datasetDTO\versionList\dataVersionConfig\fileStorageConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDatasetResponseBody\datasetDTO\versionList\dataVersionConfig\metadataStorageConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDatasetResponseBody\datasetDTO\versionList\dataVersionConfig\realtimeMetaTableConfig;

class dataVersionConfig extends Model
{
    /**
     * @var fileStorageConfig
     */
    public $fileStorageConfig;

    /**
     * @var metadataStorageConfig
     */
    public $metadataStorageConfig;

    /**
     * @var realtimeMetaTableConfig
     */
    public $realtimeMetaTableConfig;

    /**
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'fileStorageConfig' => 'FileStorageConfig',
        'metadataStorageConfig' => 'MetadataStorageConfig',
        'realtimeMetaTableConfig' => 'RealtimeMetaTableConfig',
        'versionDescription' => 'VersionDescription',
    ];

    public function validate()
    {
        if (null !== $this->fileStorageConfig) {
            $this->fileStorageConfig->validate();
        }
        if (null !== $this->metadataStorageConfig) {
            $this->metadataStorageConfig->validate();
        }
        if (null !== $this->realtimeMetaTableConfig) {
            $this->realtimeMetaTableConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileStorageConfig) {
            $res['FileStorageConfig'] = null !== $this->fileStorageConfig ? $this->fileStorageConfig->toArray($noStream) : $this->fileStorageConfig;
        }

        if (null !== $this->metadataStorageConfig) {
            $res['MetadataStorageConfig'] = null !== $this->metadataStorageConfig ? $this->metadataStorageConfig->toArray($noStream) : $this->metadataStorageConfig;
        }

        if (null !== $this->realtimeMetaTableConfig) {
            $res['RealtimeMetaTableConfig'] = null !== $this->realtimeMetaTableConfig ? $this->realtimeMetaTableConfig->toArray($noStream) : $this->realtimeMetaTableConfig;
        }

        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
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
        if (isset($map['FileStorageConfig'])) {
            $model->fileStorageConfig = fileStorageConfig::fromMap($map['FileStorageConfig']);
        }

        if (isset($map['MetadataStorageConfig'])) {
            $model->metadataStorageConfig = metadataStorageConfig::fromMap($map['MetadataStorageConfig']);
        }

        if (isset($map['RealtimeMetaTableConfig'])) {
            $model->realtimeMetaTableConfig = realtimeMetaTableConfig::fromMap($map['RealtimeMetaTableConfig']);
        }

        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }

        return $model;
    }
}

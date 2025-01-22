<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class UploadDocumentAsyncAdvanceRequest extends Model
{
    /**
     * @var int
     */
    public $chunkOverlap;
    /**
     * @var int
     */
    public $chunkSize;
    /**
     * @var string
     */
    public $collection;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $documentLoaderName;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var Stream
     */
    public $fileUrlObject;
    /**
     * @var mixed[]
     */
    public $metadata;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $namespacePassword;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string[]
     */
    public $separators;
    /**
     * @var string
     */
    public $textSplitterName;
    /**
     * @var bool
     */
    public $zhTitleEnhance;
    protected $_name = [
        'chunkOverlap'       => 'ChunkOverlap',
        'chunkSize'          => 'ChunkSize',
        'collection'         => 'Collection',
        'DBInstanceId'       => 'DBInstanceId',
        'documentLoaderName' => 'DocumentLoaderName',
        'dryRun'             => 'DryRun',
        'fileName'           => 'FileName',
        'fileUrlObject'      => 'FileUrl',
        'metadata'           => 'Metadata',
        'namespace'          => 'Namespace',
        'namespacePassword'  => 'NamespacePassword',
        'ownerId'            => 'OwnerId',
        'regionId'           => 'RegionId',
        'separators'         => 'Separators',
        'textSplitterName'   => 'TextSplitterName',
        'zhTitleEnhance'     => 'ZhTitleEnhance',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->separators)) {
            Model::validateArray($this->separators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkOverlap) {
            $res['ChunkOverlap'] = $this->chunkOverlap;
        }

        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }

        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->documentLoaderName) {
            $res['DocumentLoaderName'] = $this->documentLoaderName;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->namespacePassword) {
            $res['NamespacePassword'] = $this->namespacePassword;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->separators) {
            if (\is_array($this->separators)) {
                $res['Separators'] = [];
                $n1                = 0;
                foreach ($this->separators as $item1) {
                    $res['Separators'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->textSplitterName) {
            $res['TextSplitterName'] = $this->textSplitterName;
        }

        if (null !== $this->zhTitleEnhance) {
            $res['ZhTitleEnhance'] = $this->zhTitleEnhance;
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
        if (isset($map['ChunkOverlap'])) {
            $model->chunkOverlap = $map['ChunkOverlap'];
        }

        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }

        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DocumentLoaderName'])) {
            $model->documentLoaderName = $map['DocumentLoaderName'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrlObject = $map['FileUrl'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NamespacePassword'])) {
            $model->namespacePassword = $map['NamespacePassword'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Separators'])) {
            if (!empty($map['Separators'])) {
                $model->separators = [];
                $n1                = 0;
                foreach ($map['Separators'] as $item1) {
                    $model->separators[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TextSplitterName'])) {
            $model->textSplitterName = $map['TextSplitterName'];
        }

        if (isset($map['ZhTitleEnhance'])) {
            $model->zhTitleEnhance = $map['ZhTitleEnhance'];
        }

        return $model;
    }
}

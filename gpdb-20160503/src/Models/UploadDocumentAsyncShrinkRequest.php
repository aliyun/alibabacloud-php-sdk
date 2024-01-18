<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UploadDocumentAsyncShrinkRequest extends Model
{
    /**
     * @example 50
     *
     * @var int
     */
    public $chunkOverlap;

    /**
     * @example 250
     *
     * @var int
     */
    public $chunkSize;

    /**
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example PyMuPDFLoader
     *
     * @var string
     */
    public $documentLoaderName;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example mydoc.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @example https://xx/mydoc.txt
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $metadataShrink;

    /**
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @example testpassword
     *
     * @var string
     */
    public $namespacePassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $separatorsShrink;

    /**
     * @example ChineseRecursiveTextSplitter
     *
     * @var string
     */
    public $textSplitterName;

    /**
     * @example false
     *
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
        'fileUrl'            => 'FileUrl',
        'metadataShrink'     => 'Metadata',
        'namespace'          => 'Namespace',
        'namespacePassword'  => 'NamespacePassword',
        'ownerId'            => 'OwnerId',
        'regionId'           => 'RegionId',
        'separatorsShrink'   => 'Separators',
        'textSplitterName'   => 'TextSplitterName',
        'zhTitleEnhance'     => 'ZhTitleEnhance',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->metadataShrink) {
            $res['Metadata'] = $this->metadataShrink;
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
        if (null !== $this->separatorsShrink) {
            $res['Separators'] = $this->separatorsShrink;
        }
        if (null !== $this->textSplitterName) {
            $res['TextSplitterName'] = $this->textSplitterName;
        }
        if (null !== $this->zhTitleEnhance) {
            $res['ZhTitleEnhance'] = $this->zhTitleEnhance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadDocumentAsyncShrinkRequest
     */
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
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Metadata'])) {
            $model->metadataShrink = $map['Metadata'];
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
            $model->separatorsShrink = $map['Separators'];
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

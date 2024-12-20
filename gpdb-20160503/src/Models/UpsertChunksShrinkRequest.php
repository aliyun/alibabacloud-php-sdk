<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpsertChunksShrinkRequest extends Model
{
    /**
     * @description Document collection name.
     *
     * This parameter is required.
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description Instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description File name.
     *
     * > If a file name is specified and not empty, it will overwrite the data for this file name; if empty, the chunks data will be appended directly to the document collection.
     * @example mydoc.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @description Namespace, default is public.
     *
     * > You can create it using the [CreateNamespace](https://help.aliyun.com/document_detail/2401495.html) API and view the list using the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) API.
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Password corresponding to the namespace.
     *
     * This parameter is required.
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
     * @description Region ID where the instance is located.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description List of split documents.
     *
     * @var string
     */
    public $textChunksShrink;
    protected $_name = [
        'collection'        => 'Collection',
        'DBInstanceId'      => 'DBInstanceId',
        'fileName'          => 'FileName',
        'namespace'         => 'Namespace',
        'namespacePassword' => 'NamespacePassword',
        'ownerId'           => 'OwnerId',
        'regionId'          => 'RegionId',
        'textChunksShrink'  => 'TextChunks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
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
        if (null !== $this->textChunksShrink) {
            $res['TextChunks'] = $this->textChunksShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpsertChunksShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
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
        if (isset($map['TextChunks'])) {
            $model->textChunksShrink = $map['TextChunks'];
        }

        return $model;
    }
}

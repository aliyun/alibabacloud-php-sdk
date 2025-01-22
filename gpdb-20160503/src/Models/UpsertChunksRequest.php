<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertChunksRequest\textChunks;

class UpsertChunksRequest extends Model
{
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
    public $fileName;
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
     * @var textChunks[]
     */
    public $textChunks;
    protected $_name = [
        'collection'        => 'Collection',
        'DBInstanceId'      => 'DBInstanceId',
        'fileName'          => 'FileName',
        'namespace'         => 'Namespace',
        'namespacePassword' => 'NamespacePassword',
        'ownerId'           => 'OwnerId',
        'regionId'          => 'RegionId',
        'textChunks'        => 'TextChunks',
    ];

    public function validate()
    {
        if (\is_array($this->textChunks)) {
            Model::validateArray($this->textChunks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->textChunks) {
            if (\is_array($this->textChunks)) {
                $res['TextChunks'] = [];
                $n1                = 0;
                foreach ($this->textChunks as $item1) {
                    $res['TextChunks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['TextChunks'])) {
                $model->textChunks = [];
                $n1                = 0;
                foreach ($map['TextChunks'] as $item1) {
                    $model->textChunks[$n1++] = textChunks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

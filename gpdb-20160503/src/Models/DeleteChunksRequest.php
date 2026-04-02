<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DeleteChunksRequest extends Model
{
    /**
     * @var string[]
     */
    public $chunkIds;

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
    public $namespace;

    /**
     * @var string
     */
    public $namespacePassword;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'chunkIds' => 'ChunkIds',
        'collection' => 'Collection',
        'DBInstanceId' => 'DBInstanceId',
        'namespace' => 'Namespace',
        'namespacePassword' => 'NamespacePassword',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->chunkIds)) {
            Model::validateArray($this->chunkIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkIds) {
            if (\is_array($this->chunkIds)) {
                $res['ChunkIds'] = [];
                $n1 = 0;
                foreach ($this->chunkIds as $item1) {
                    $res['ChunkIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->namespacePassword) {
            $res['NamespacePassword'] = $this->namespacePassword;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ChunkIds'])) {
            if (!empty($map['ChunkIds'])) {
                $model->chunkIds = [];
                $n1 = 0;
                foreach ($map['ChunkIds'] as $item1) {
                    $model->chunkIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NamespacePassword'])) {
            $model->namespacePassword = $map['NamespacePassword'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

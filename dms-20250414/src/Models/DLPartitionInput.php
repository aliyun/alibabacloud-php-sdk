<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DLPartitionInput extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var DLStorageDescriptor
     */
    public $storageDescriptor;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'createTime' => 'CreateTime',
        'lastAccessTime' => 'LastAccessTime',
        'parameters' => 'Parameters',
        'storageDescriptor' => 'StorageDescriptor',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (null !== $this->storageDescriptor) {
            $this->storageDescriptor->validate();
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->storageDescriptor) {
            $res['StorageDescriptor'] = null !== $this->storageDescriptor ? $this->storageDescriptor->toArray($noStream) : $this->storageDescriptor;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['StorageDescriptor'])) {
            $model->storageDescriptor = DLStorageDescriptor::fromMap($map['StorageDescriptor']);
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

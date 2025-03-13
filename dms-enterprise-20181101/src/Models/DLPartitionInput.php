<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->storageDescriptor) {
            $res['StorageDescriptor'] = null !== $this->storageDescriptor ? $this->storageDescriptor->toMap() : null;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DLPartitionInput
     */
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
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['StorageDescriptor'])) {
            $model->storageDescriptor = DLStorageDescriptor::fromMap($map['StorageDescriptor']);
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}

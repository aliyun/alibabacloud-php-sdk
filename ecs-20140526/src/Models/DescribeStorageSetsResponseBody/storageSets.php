<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageSetsResponseBody\storageSets\storageSet;

class storageSets extends Model
{
    /**
     * @var storageSet[]
     */
    public $storageSet;
    protected $_name = [
        'storageSet' => 'StorageSet',
    ];

    public function validate()
    {
        if (\is_array($this->storageSet)) {
            Model::validateArray($this->storageSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageSet) {
            if (\is_array($this->storageSet)) {
                $res['StorageSet'] = [];
                $n1 = 0;
                foreach ($this->storageSet as $item1) {
                    $res['StorageSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StorageSet'])) {
            if (!empty($map['StorageSet'])) {
                $model->storageSet = [];
                $n1 = 0;
                foreach ($map['StorageSet'] as $item1) {
                    $model->storageSet[$n1++] = storageSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

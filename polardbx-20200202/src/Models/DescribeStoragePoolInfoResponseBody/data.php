<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeStoragePoolInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeStoragePoolInfoResponseBody\data\storagePools;

class data extends Model
{
    /**
     * @var storagePools[]
     */
    public $storagePools;
    protected $_name = [
        'storagePools' => 'StoragePools',
    ];

    public function validate()
    {
        if (\is_array($this->storagePools)) {
            Model::validateArray($this->storagePools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storagePools) {
            if (\is_array($this->storagePools)) {
                $res['StoragePools'] = [];
                $n1 = 0;
                foreach ($this->storagePools as $item1) {
                    $res['StoragePools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StoragePools'])) {
            if (!empty($map['StoragePools'])) {
                $model->storagePools = [];
                $n1 = 0;
                foreach ($map['StoragePools'] as $item1) {
                    $model->storagePools[$n1] = storagePools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

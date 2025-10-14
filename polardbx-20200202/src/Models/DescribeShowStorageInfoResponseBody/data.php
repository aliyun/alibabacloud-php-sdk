<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeShowStorageInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeShowStorageInfoResponseBody\data\storageInfos;

class data extends Model
{
    /**
     * @var storageInfos[]
     */
    public $storageInfos;
    protected $_name = [
        'storageInfos' => 'StorageInfos',
    ];

    public function validate()
    {
        if (\is_array($this->storageInfos)) {
            Model::validateArray($this->storageInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageInfos) {
            if (\is_array($this->storageInfos)) {
                $res['StorageInfos'] = [];
                $n1 = 0;
                foreach ($this->storageInfos as $item1) {
                    $res['StorageInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StorageInfos'])) {
            if (!empty($map['StorageInfos'])) {
                $model->storageInfos = [];
                $n1 = 0;
                foreach ($map['StorageInfos'] as $item1) {
                    $model->storageInfos[$n1] = storageInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

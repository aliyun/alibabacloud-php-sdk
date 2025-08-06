<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPersonalStorageListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetPersonalStorageListResponseBody\storageInfoList\storageInfo;

class storageInfoList extends Model
{
    /**
     * @var storageInfo[]
     */
    public $storageInfo;
    protected $_name = [
        'storageInfo' => 'StorageInfo',
    ];

    public function validate()
    {
        if (\is_array($this->storageInfo)) {
            Model::validateArray($this->storageInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageInfo) {
            if (\is_array($this->storageInfo)) {
                $res['StorageInfo'] = [];
                $n1 = 0;
                foreach ($this->storageInfo as $item1) {
                    $res['StorageInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StorageInfo'])) {
            if (!empty($map['StorageInfo'])) {
                $model->storageInfo = [];
                $n1 = 0;
                foreach ($map['StorageInfo'] as $item1) {
                    $model->storageInfo[$n1] = storageInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBakDataSourceStorageAccessInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBakDataSourceStorageAccessInfoResponseBody\data\ossAccessInfo;

class data extends Model
{
    /**
     * @var ossAccessInfo
     */
    public $ossAccessInfo;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'ossAccessInfo' => 'OssAccessInfo',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        if (null !== $this->ossAccessInfo) {
            $this->ossAccessInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossAccessInfo) {
            $res['OssAccessInfo'] = null !== $this->ossAccessInfo ? $this->ossAccessInfo->toArray($noStream) : $this->ossAccessInfo;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['OssAccessInfo'])) {
            $model->ossAccessInfo = ossAccessInfo::fromMap($map['OssAccessInfo']);
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}

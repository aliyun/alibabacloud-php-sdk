<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\storageTypeList\storageType;
use AlibabaCloud\Tea\Model;

class storageTypeList extends Model
{
    /**
     * @var storageType[]
     */
    public $storageType;
    protected $_name = [
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageType) {
            $res['StorageType'] = [];
            if (null !== $this->storageType && \is_array($this->storageType)) {
                $n = 0;
                foreach ($this->storageType as $item) {
                    $res['StorageType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageType'])) {
            if (!empty($map['StorageType'])) {
                $model->storageType = [];
                $n                  = 0;
                foreach ($map['StorageType'] as $item) {
                    $model->storageType[$n++] = null !== $item ? storageType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

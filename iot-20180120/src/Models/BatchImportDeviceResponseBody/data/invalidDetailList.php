<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class invalidDetailList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\invalidDetailList\invalidDetailList[]
     */
    public $invalidDetailList;
    protected $_name = [
        'invalidDetailList' => 'InvalidDetailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDetailList) {
            $res['InvalidDetailList'] = [];
            if (null !== $this->invalidDetailList && \is_array($this->invalidDetailList)) {
                $n = 0;
                foreach ($this->invalidDetailList as $item) {
                    $res['InvalidDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidDetailList'])) {
            if (!empty($map['InvalidDetailList'])) {
                $model->invalidDetailList = [];
                $n                        = 0;
                foreach ($map['InvalidDetailList'] as $item) {
                    $model->invalidDetailList[$n++] = null !== $item ? \AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\invalidDetailList\invalidDetailList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

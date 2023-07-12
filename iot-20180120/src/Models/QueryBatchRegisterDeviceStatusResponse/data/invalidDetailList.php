<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponse\data;

use AlibabaCloud\Tea\Model;

class invalidDetailList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponse\data\invalidDetailList\invalidDetailList[]
     */
    public $invalidDetailList;
    protected $_name = [
        'invalidDetailList' => 'invalidDetailList',
    ];

    public function validate()
    {
        Model::validateRequired('invalidDetailList', $this->invalidDetailList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDetailList) {
            $res['invalidDetailList'] = [];
            if (null !== $this->invalidDetailList && \is_array($this->invalidDetailList)) {
                $n = 0;
                foreach ($this->invalidDetailList as $item) {
                    $res['invalidDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['invalidDetailList'])) {
            if (!empty($map['invalidDetailList'])) {
                $model->invalidDetailList = [];
                $n                        = 0;
                foreach ($map['invalidDetailList'] as $item) {
                    $model->invalidDetailList[$n++] = null !== $item ? \AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponse\data\invalidDetailList\invalidDetailList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

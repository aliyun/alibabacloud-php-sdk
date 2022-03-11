<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\dataInitializationDetailList\dataInitializationDetail;
use AlibabaCloud\Tea\Model;

class dataInitializationDetailList extends Model
{
    /**
     * @var dataInitializationDetail[]
     */
    public $dataInitializationDetail;
    protected $_name = [
        'dataInitializationDetail' => 'DataInitializationDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInitializationDetail) {
            $res['DataInitializationDetail'] = [];
            if (null !== $this->dataInitializationDetail && \is_array($this->dataInitializationDetail)) {
                $n = 0;
                foreach ($this->dataInitializationDetail as $item) {
                    $res['DataInitializationDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataInitializationDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInitializationDetail'])) {
            if (!empty($map['DataInitializationDetail'])) {
                $model->dataInitializationDetail = [];
                $n                               = 0;
                foreach ($map['DataInitializationDetail'] as $item) {
                    $model->dataInitializationDetail[$n++] = null !== $item ? dataInitializationDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

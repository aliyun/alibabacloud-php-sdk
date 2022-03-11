<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\dataSynchronizationDetailList\dataSynchronizationDetail;
use AlibabaCloud\Tea\Model;

class dataSynchronizationDetailList extends Model
{
    /**
     * @var dataSynchronizationDetail[]
     */
    public $dataSynchronizationDetail;
    protected $_name = [
        'dataSynchronizationDetail' => 'DataSynchronizationDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSynchronizationDetail) {
            $res['DataSynchronizationDetail'] = [];
            if (null !== $this->dataSynchronizationDetail && \is_array($this->dataSynchronizationDetail)) {
                $n = 0;
                foreach ($this->dataSynchronizationDetail as $item) {
                    $res['DataSynchronizationDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSynchronizationDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSynchronizationDetail'])) {
            if (!empty($map['DataSynchronizationDetail'])) {
                $model->dataSynchronizationDetail = [];
                $n                                = 0;
                foreach ($map['DataSynchronizationDetail'] as $item) {
                    $model->dataSynchronizationDetail[$n++] = null !== $item ? dataSynchronizationDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

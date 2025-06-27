<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\dataSynchronizationDetailList\dataSynchronizationDetail;

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
        if (\is_array($this->dataSynchronizationDetail)) {
            Model::validateArray($this->dataSynchronizationDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSynchronizationDetail) {
            if (\is_array($this->dataSynchronizationDetail)) {
                $res['DataSynchronizationDetail'] = [];
                $n1 = 0;
                foreach ($this->dataSynchronizationDetail as $item1) {
                    $res['DataSynchronizationDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataSynchronizationDetail'])) {
            if (!empty($map['DataSynchronizationDetail'])) {
                $model->dataSynchronizationDetail = [];
                $n1 = 0;
                foreach ($map['DataSynchronizationDetail'] as $item1) {
                    $model->dataSynchronizationDetail[$n1] = dataSynchronizationDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

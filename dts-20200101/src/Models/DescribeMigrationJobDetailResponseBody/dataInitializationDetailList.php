<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\dataInitializationDetailList\dataInitializationDetail;

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
        if (\is_array($this->dataInitializationDetail)) {
            Model::validateArray($this->dataInitializationDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInitializationDetail) {
            if (\is_array($this->dataInitializationDetail)) {
                $res['DataInitializationDetail'] = [];
                $n1 = 0;
                foreach ($this->dataInitializationDetail as $item1) {
                    $res['DataInitializationDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataInitializationDetail'])) {
            if (!empty($map['DataInitializationDetail'])) {
                $model->dataInitializationDetail = [];
                $n1 = 0;
                foreach ($map['DataInitializationDetail'] as $item1) {
                    $model->dataInitializationDetail[$n1] = dataInitializationDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\promDetailList\promDetail;

class promDetailList extends Model
{
    /**
     * @var promDetail[]
     */
    public $promDetail;
    protected $_name = [
        'promDetail' => 'PromDetail',
    ];

    public function validate()
    {
        if (\is_array($this->promDetail)) {
            Model::validateArray($this->promDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promDetail) {
            if (\is_array($this->promDetail)) {
                $res['PromDetail'] = [];
                $n1 = 0;
                foreach ($this->promDetail as $item1) {
                    $res['PromDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PromDetail'])) {
            if (!empty($map['PromDetail'])) {
                $model->promDetail = [];
                $n1 = 0;
                foreach ($map['PromDetail'] as $item1) {
                    $model->promDetail[$n1++] = promDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

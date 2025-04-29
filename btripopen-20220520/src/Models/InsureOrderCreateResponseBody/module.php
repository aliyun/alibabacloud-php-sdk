<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateResponseBody\module\insureOrderDetailList;

class module extends Model
{
    /**
     * @var int
     */
    public $copies;

    /**
     * @var insureOrderDetailList[]
     */
    public $insureOrderDetailList;

    /**
     * @var string
     */
    public $insureOrderId;

    /**
     * @var int
     */
    public $premium;
    protected $_name = [
        'copies' => 'copies',
        'insureOrderDetailList' => 'insure_order_detail_list',
        'insureOrderId' => 'insure_order_id',
        'premium' => 'premium',
    ];

    public function validate()
    {
        if (\is_array($this->insureOrderDetailList)) {
            Model::validateArray($this->insureOrderDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->copies) {
            $res['copies'] = $this->copies;
        }

        if (null !== $this->insureOrderDetailList) {
            if (\is_array($this->insureOrderDetailList)) {
                $res['insure_order_detail_list'] = [];
                $n1 = 0;
                foreach ($this->insureOrderDetailList as $item1) {
                    $res['insure_order_detail_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->insureOrderId) {
            $res['insure_order_id'] = $this->insureOrderId;
        }

        if (null !== $this->premium) {
            $res['premium'] = $this->premium;
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
        if (isset($map['copies'])) {
            $model->copies = $map['copies'];
        }

        if (isset($map['insure_order_detail_list'])) {
            if (!empty($map['insure_order_detail_list'])) {
                $model->insureOrderDetailList = [];
                $n1 = 0;
                foreach ($map['insure_order_detail_list'] as $item1) {
                    $model->insureOrderDetailList[$n1++] = insureOrderDetailList::fromMap($item1);
                }
            }
        }

        if (isset($map['insure_order_id'])) {
            $model->insureOrderId = $map['insure_order_id'];
        }

        if (isset($map['premium'])) {
            $model->premium = $map['premium'];
        }

        return $model;
    }
}

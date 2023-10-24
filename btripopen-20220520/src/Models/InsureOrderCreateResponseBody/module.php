<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateResponseBody\module\insureOrderDetailList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $copies;

    /**
     * @var insureOrderDetailList[]
     */
    public $insureOrderDetailList;

    /**
     * @example 1021000196500370001
     *
     * @var string
     */
    public $insureOrderId;

    /**
     * @example 3000
     *
     * @var int
     */
    public $premium;
    protected $_name = [
        'copies'                => 'copies',
        'insureOrderDetailList' => 'insure_order_detail_list',
        'insureOrderId'         => 'insure_order_id',
        'premium'               => 'premium',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->copies) {
            $res['copies'] = $this->copies;
        }
        if (null !== $this->insureOrderDetailList) {
            $res['insure_order_detail_list'] = [];
            if (null !== $this->insureOrderDetailList && \is_array($this->insureOrderDetailList)) {
                $n = 0;
                foreach ($this->insureOrderDetailList as $item) {
                    $res['insure_order_detail_list'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['copies'])) {
            $model->copies = $map['copies'];
        }
        if (isset($map['insure_order_detail_list'])) {
            if (!empty($map['insure_order_detail_list'])) {
                $model->insureOrderDetailList = [];
                $n                            = 0;
                foreach ($map['insure_order_detail_list'] as $item) {
                    $model->insureOrderDetailList[$n++] = null !== $item ? insureOrderDetailList::fromMap($item) : $item;
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

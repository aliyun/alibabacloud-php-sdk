<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopApplyResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $asyncApplyKey;

    /**
     * @var string
     */
    public $outReShopApplyId;

    /**
     * @var string
     */
    public $reShopApplyId;
    protected $_name = [
        'asyncApplyKey' => 'async_apply_key',
        'outReShopApplyId' => 'out_re_shop_apply_id',
        'reShopApplyId' => 're_shop_apply_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncApplyKey) {
            $res['async_apply_key'] = $this->asyncApplyKey;
        }

        if (null !== $this->outReShopApplyId) {
            $res['out_re_shop_apply_id'] = $this->outReShopApplyId;
        }

        if (null !== $this->reShopApplyId) {
            $res['re_shop_apply_id'] = $this->reShopApplyId;
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
        if (isset($map['async_apply_key'])) {
            $model->asyncApplyKey = $map['async_apply_key'];
        }

        if (isset($map['out_re_shop_apply_id'])) {
            $model->outReShopApplyId = $map['out_re_shop_apply_id'];
        }

        if (isset($map['re_shop_apply_id'])) {
            $model->reShopApplyId = $map['re_shop_apply_id'];
        }

        return $model;
    }
}

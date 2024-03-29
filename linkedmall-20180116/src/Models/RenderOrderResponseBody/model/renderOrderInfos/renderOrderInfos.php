<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos\deliveryInfos;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos\lmItemInfos;
use AlibabaCloud\Tea\Model;

class renderOrderInfos extends Model
{
    /**
     * @var deliveryInfos
     */
    public $deliveryInfos;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var lmItemInfos
     */
    public $lmItemInfos;
    protected $_name = [
        'deliveryInfos' => 'DeliveryInfos',
        'extInfo'       => 'ExtInfo',
        'lmItemInfos'   => 'LmItemInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryInfos) {
            $res['DeliveryInfos'] = null !== $this->deliveryInfos ? $this->deliveryInfos->toMap() : null;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->lmItemInfos) {
            $res['LmItemInfos'] = null !== $this->lmItemInfos ? $this->lmItemInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return renderOrderInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryInfos'])) {
            $model->deliveryInfos = deliveryInfos::fromMap($map['DeliveryInfos']);
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['LmItemInfos'])) {
            $model->lmItemInfos = lmItemInfos::fromMap($map['LmItemInfos']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model\addressInfos;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model\renderOrderInfos;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model\unsellableRenderOrderInfos;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var addressInfos[]
     */
    public $addressInfos;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var string[]
     */
    public $extInfo;

    /**
     * @var string
     */
    public $message;

    /**
     * @var renderOrderInfos[]
     */
    public $renderOrderInfos;

    /**
     * @var unsellableRenderOrderInfos[]
     */
    public $unsellableRenderOrderInfos;
    protected $_name = [
        'addressInfos'               => 'AddressInfos',
        'canSell'                    => 'CanSell',
        'extInfo'                    => 'ExtInfo',
        'message'                    => 'Message',
        'renderOrderInfos'           => 'RenderOrderInfos',
        'unsellableRenderOrderInfos' => 'UnsellableRenderOrderInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressInfos) {
            $res['AddressInfos'] = [];
            if (null !== $this->addressInfos && \is_array($this->addressInfos)) {
                $n = 0;
                foreach ($this->addressInfos as $item) {
                    $res['AddressInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->renderOrderInfos) {
            $res['RenderOrderInfos'] = [];
            if (null !== $this->renderOrderInfos && \is_array($this->renderOrderInfos)) {
                $n = 0;
                foreach ($this->renderOrderInfos as $item) {
                    $res['RenderOrderInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unsellableRenderOrderInfos) {
            $res['UnsellableRenderOrderInfos'] = [];
            if (null !== $this->unsellableRenderOrderInfos && \is_array($this->unsellableRenderOrderInfos)) {
                $n = 0;
                foreach ($this->unsellableRenderOrderInfos as $item) {
                    $res['UnsellableRenderOrderInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressInfos'])) {
            if (!empty($map['AddressInfos'])) {
                $model->addressInfos = [];
                $n                   = 0;
                foreach ($map['AddressInfos'] as $item) {
                    $model->addressInfos[$n++] = null !== $item ? addressInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RenderOrderInfos'])) {
            if (!empty($map['RenderOrderInfos'])) {
                $model->renderOrderInfos = [];
                $n                       = 0;
                foreach ($map['RenderOrderInfos'] as $item) {
                    $model->renderOrderInfos[$n++] = null !== $item ? renderOrderInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UnsellableRenderOrderInfos'])) {
            if (!empty($map['UnsellableRenderOrderInfos'])) {
                $model->unsellableRenderOrderInfos = [];
                $n                                 = 0;
                foreach ($map['UnsellableRenderOrderInfos'] as $item) {
                    $model->unsellableRenderOrderInfos[$n++] = null !== $item ? unsellableRenderOrderInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

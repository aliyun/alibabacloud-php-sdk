<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee\btripRoutes;
use AlibabaCloud\Tea\Model;

class trafficFee extends Model
{
    /**
     * @var btripRoutes[]
     */
    public $btripRoutes;

    /**
     * @example demo
     *
     * @var string
     */
    public $errMsg;

    /**
     * @example 265000
     *
     * @var int
     */
    public $maxFee;

    /**
     * @example 30100
     *
     * @var int
     */
    public $minFee;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'btripRoutes' => 'btrip_routes',
        'errMsg'      => 'err_msg',
        'maxFee'      => 'max_fee',
        'minFee'      => 'min_fee',
        'success'     => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripRoutes) {
            $res['btrip_routes'] = [];
            if (null !== $this->btripRoutes && \is_array($this->btripRoutes)) {
                $n = 0;
                foreach ($this->btripRoutes as $item) {
                    $res['btrip_routes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errMsg) {
            $res['err_msg'] = $this->errMsg;
        }
        if (null !== $this->maxFee) {
            $res['max_fee'] = $this->maxFee;
        }
        if (null !== $this->minFee) {
            $res['min_fee'] = $this->minFee;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficFee
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_routes'])) {
            if (!empty($map['btrip_routes'])) {
                $model->btripRoutes = [];
                $n                  = 0;
                foreach ($map['btrip_routes'] as $item) {
                    $model->btripRoutes[$n++] = null !== $item ? btripRoutes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['err_msg'])) {
            $model->errMsg = $map['err_msg'];
        }
        if (isset($map['max_fee'])) {
            $model->maxFee = $map['max_fee'];
        }
        if (isset($map['min_fee'])) {
            $model->minFee = $map['min_fee'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee\btripRoutes;

class trafficFee extends Model
{
    /**
     * @var btripRoutes[]
     */
    public $btripRoutes;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var int
     */
    public $maxFee;

    /**
     * @var int
     */
    public $minFee;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'btripRoutes' => 'btrip_routes',
        'errMsg' => 'err_msg',
        'maxFee' => 'max_fee',
        'minFee' => 'min_fee',
        'success' => 'success',
    ];

    public function validate()
    {
        if (\is_array($this->btripRoutes)) {
            Model::validateArray($this->btripRoutes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->btripRoutes) {
            if (\is_array($this->btripRoutes)) {
                $res['btrip_routes'] = [];
                $n1 = 0;
                foreach ($this->btripRoutes as $item1) {
                    $res['btrip_routes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_routes'])) {
            if (!empty($map['btrip_routes'])) {
                $model->btripRoutes = [];
                $n1 = 0;
                foreach ($map['btrip_routes'] as $item1) {
                    $model->btripRoutes[$n1] = btripRoutes::fromMap($item1);
                    ++$n1;
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

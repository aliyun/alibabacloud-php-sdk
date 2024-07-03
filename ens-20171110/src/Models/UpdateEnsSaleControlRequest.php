<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlRequest\saleControls;
use AlibabaCloud\Tea\Model;

class UpdateEnsSaleControlRequest extends Model
{
    /**
     * @var string
     */
    public $aliUidAccount;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $customAccount;

    /**
     * @description This parameter is required.
     *
     * @var saleControls[]
     */
    public $saleControls;
    protected $_name = [
        'aliUidAccount' => 'AliUidAccount',
        'commodityCode' => 'CommodityCode',
        'customAccount' => 'CustomAccount',
        'saleControls'  => 'SaleControls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUidAccount) {
            $res['AliUidAccount'] = $this->aliUidAccount;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->customAccount) {
            $res['CustomAccount'] = $this->customAccount;
        }
        if (null !== $this->saleControls) {
            $res['SaleControls'] = [];
            if (null !== $this->saleControls && \is_array($this->saleControls)) {
                $n = 0;
                foreach ($this->saleControls as $item) {
                    $res['SaleControls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEnsSaleControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUidAccount'])) {
            $model->aliUidAccount = $map['AliUidAccount'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CustomAccount'])) {
            $model->customAccount = $map['CustomAccount'];
        }
        if (isset($map['SaleControls'])) {
            if (!empty($map['SaleControls'])) {
                $model->saleControls = [];
                $n                   = 0;
                foreach ($map['SaleControls'] as $item) {
                    $model->saleControls[$n++] = null !== $item ? saleControls::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

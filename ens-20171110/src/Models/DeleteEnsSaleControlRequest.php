<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleControlRequest\saleControls;

class DeleteEnsSaleControlRequest extends Model
{
    /**
     * @var string
     */
    public $aliUidAccount;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $customAccount;

    /**
     * @var saleControls[]
     */
    public $saleControls;
    protected $_name = [
        'aliUidAccount' => 'AliUidAccount',
        'commodityCode' => 'CommodityCode',
        'customAccount' => 'CustomAccount',
        'saleControls' => 'SaleControls',
    ];

    public function validate()
    {
        if (\is_array($this->saleControls)) {
            Model::validateArray($this->saleControls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->saleControls)) {
                $res['SaleControls'] = [];
                $n1 = 0;
                foreach ($this->saleControls as $item1) {
                    $res['SaleControls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['SaleControls'] as $item1) {
                    $model->saleControls[$n1] = saleControls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

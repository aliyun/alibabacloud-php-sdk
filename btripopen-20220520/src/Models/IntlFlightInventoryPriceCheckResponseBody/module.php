<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module\passengerChangedPriceInfoList;

class module extends Model
{
    /**
     * @var bool
     */
    public $checkSuccess;

    /**
     * @var int
     */
    public $failType;

    /**
     * @var passengerChangedPriceInfoList[]
     */
    public $passengerChangedPriceInfoList;

    /**
     * @var string
     */
    public $renderKey;
    protected $_name = [
        'checkSuccess' => 'check_success',
        'failType' => 'fail_type',
        'passengerChangedPriceInfoList' => 'passenger_changed_price_info_list',
        'renderKey' => 'render_key',
    ];

    public function validate()
    {
        if (\is_array($this->passengerChangedPriceInfoList)) {
            Model::validateArray($this->passengerChangedPriceInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkSuccess) {
            $res['check_success'] = $this->checkSuccess;
        }

        if (null !== $this->failType) {
            $res['fail_type'] = $this->failType;
        }

        if (null !== $this->passengerChangedPriceInfoList) {
            if (\is_array($this->passengerChangedPriceInfoList)) {
                $res['passenger_changed_price_info_list'] = [];
                $n1 = 0;
                foreach ($this->passengerChangedPriceInfoList as $item1) {
                    $res['passenger_changed_price_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->renderKey) {
            $res['render_key'] = $this->renderKey;
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
        if (isset($map['check_success'])) {
            $model->checkSuccess = $map['check_success'];
        }

        if (isset($map['fail_type'])) {
            $model->failType = $map['fail_type'];
        }

        if (isset($map['passenger_changed_price_info_list'])) {
            if (!empty($map['passenger_changed_price_info_list'])) {
                $model->passengerChangedPriceInfoList = [];
                $n1 = 0;
                foreach ($map['passenger_changed_price_info_list'] as $item1) {
                    $model->passengerChangedPriceInfoList[$n1] = passengerChangedPriceInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['render_key'])) {
            $model->renderKey = $map['render_key'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module\passengerChangedPriceInfoList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $checkSuccess;

    /**
     * @example 0
     *
     * @var int
     */
    public $failType;

    /**
     * @var passengerChangedPriceInfoList[]
     */
    public $passengerChangedPriceInfoList;

    /**
     * @example fcoid_deb6372db8194f1c94c23bc4fadc508d
     *
     * @var string
     */
    public $renderKey;
    protected $_name = [
        'checkSuccess'                  => 'check_success',
        'failType'                      => 'fail_type',
        'passengerChangedPriceInfoList' => 'passenger_changed_price_info_list',
        'renderKey'                     => 'render_key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkSuccess) {
            $res['check_success'] = $this->checkSuccess;
        }
        if (null !== $this->failType) {
            $res['fail_type'] = $this->failType;
        }
        if (null !== $this->passengerChangedPriceInfoList) {
            $res['passenger_changed_price_info_list'] = [];
            if (null !== $this->passengerChangedPriceInfoList && \is_array($this->passengerChangedPriceInfoList)) {
                $n = 0;
                foreach ($this->passengerChangedPriceInfoList as $item) {
                    $res['passenger_changed_price_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->renderKey) {
            $res['render_key'] = $this->renderKey;
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
        if (isset($map['check_success'])) {
            $model->checkSuccess = $map['check_success'];
        }
        if (isset($map['fail_type'])) {
            $model->failType = $map['fail_type'];
        }
        if (isset($map['passenger_changed_price_info_list'])) {
            if (!empty($map['passenger_changed_price_info_list'])) {
                $model->passengerChangedPriceInfoList = [];
                $n                                    = 0;
                foreach ($map['passenger_changed_price_info_list'] as $item) {
                    $model->passengerChangedPriceInfoList[$n++] = null !== $item ? passengerChangedPriceInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['render_key'])) {
            $model->renderKey = $map['render_key'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class UpdateEslDeviceLightRequest extends Model
{
    /**
     * @var string
     */
    public $eslBarCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $frequency;

    /**
     * @var string
     */
    public $itemBarCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ledColor;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $lightUpTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'eslBarCode'  => 'EslBarCode',
        'frequency'   => 'Frequency',
        'itemBarCode' => 'ItemBarCode',
        'ledColor'    => 'LedColor',
        'lightUpTime' => 'LightUpTime',
        'storeId'     => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->ledColor) {
            $res['LedColor'] = $this->ledColor;
        }
        if (null !== $this->lightUpTime) {
            $res['LightUpTime'] = $this->lightUpTime;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEslDeviceLightRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['LedColor'])) {
            $model->ledColor = $map['LedColor'];
        }
        if (isset($map['LightUpTime'])) {
            $model->lightUpTime = $map['LightUpTime'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}

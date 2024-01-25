<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class UpdateEslDeviceLightRequest extends Model
{
    /**
     * @example 18bc5a631ak9
     *
     * @var string
     */
    public $eslBarCode;

    /**
     * @var string
     */
    public $extraParams;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $frequency;

    /**
     * @example 6905605836648
     *
     * @var string
     */
    public $itemBarCode;

    /**
     * @example GREEN
     *
     * @var string
     */
    public $ledColor;

    /**
     * @example 30
     *
     * @var int
     */
    public $lightUpTime;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'eslBarCode'  => 'EslBarCode',
        'extraParams' => 'ExtraParams',
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
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
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
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
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

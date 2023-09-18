<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GetSelectionProductSaleInfoRequest extends Model
{
    /**
     * @example 110000
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @example 56****2304
     *
     * @var string
     */
    public $purchaserId;
    protected $_name = [
        'divisionCode' => 'divisionCode',
        'purchaserId'  => 'purchaserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }
        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSelectionProductSaleInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }
        if (isset($map['purchaserId'])) {
            $model->purchaserId = $map['purchaserId'];
        }

        return $model;
    }
}

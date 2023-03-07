<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryCashCouponsRequest extends Model
{
    /**
     * @description Specifies whether the voucher takes effect. Valid values:
     *
     *   true: The voucher takes effect.
     *   false: The voucher does not take effect.
     *
     * @example true
     *
     * @var bool
     */
    public $effectiveOrNot;

    /**
     * @description The end time of the validity period of the voucher. Specify the parameter in the yyyy-MM-ddTHH:mm:ssZ format. Example: 2018-08-01T00:00:00Z.
     *
     * @example 2018-08-01T00:00:00Z
     *
     * @var string
     */
    public $expiryTimeEnd;

    /**
     * @description The start time of the validity period of the voucher. Specify the parameter in the yyyy-MM-ddTHH:mm:ssZ format. Example: 2018-08-01T00:00:00Z.
     *
     * @example 2018-08-01T00:00:00Z
     *
     * @var string
     */
    public $expiryTimeStart;
    protected $_name = [
        'effectiveOrNot'  => 'EffectiveOrNot',
        'expiryTimeEnd'   => 'ExpiryTimeEnd',
        'expiryTimeStart' => 'ExpiryTimeStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveOrNot) {
            $res['EffectiveOrNot'] = $this->effectiveOrNot;
        }
        if (null !== $this->expiryTimeEnd) {
            $res['ExpiryTimeEnd'] = $this->expiryTimeEnd;
        }
        if (null !== $this->expiryTimeStart) {
            $res['ExpiryTimeStart'] = $this->expiryTimeStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCashCouponsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveOrNot'])) {
            $model->effectiveOrNot = $map['EffectiveOrNot'];
        }
        if (isset($map['ExpiryTimeEnd'])) {
            $model->expiryTimeEnd = $map['ExpiryTimeEnd'];
        }
        if (isset($map['ExpiryTimeStart'])) {
            $model->expiryTimeStart = $map['ExpiryTimeStart'];
        }

        return $model;
    }
}

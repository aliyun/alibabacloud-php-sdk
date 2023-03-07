<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryPrepaidCardsRequest extends Model
{
    /**
     * @description Specifies whether the prepaid card takes effect. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $effectiveOrNot;

    /**
     * @description The end of the expiration time of prepaid cards to query. The value must be in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * @example 2018-08-01T00:00:00Z
     *
     * @var string
     */
    public $expiryTimeEnd;

    /**
     * @description The start of the expiration time of prepaid cards to query. The value must be in the yyyy-MM-ddTHH:mm:ssZ format.
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
     * @return QueryPrepaidCardsRequest
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

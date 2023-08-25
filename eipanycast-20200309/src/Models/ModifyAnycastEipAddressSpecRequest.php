<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Tea\Model;

class ModifyAnycastEipAddressSpecRequest extends Model
{
    /**
     * @description The ID of the Anycast EIP.
     *
     * @example aeip-bp1ix34fralt4ykf3****
     *
     * @var string
     */
    public $anycastId;

    /**
     * @description The maximum bandwidth of the Anycast EIP. Unit: Mbit/s.
     *
     * Valid values: **200** to **1000**.
     * @example 200
     *
     * @var string
     */
    public $bandwidth;
    protected $_name = [
        'anycastId' => 'AnycastId',
        'bandwidth' => 'Bandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAnycastEipAddressSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        return $model;
    }
}

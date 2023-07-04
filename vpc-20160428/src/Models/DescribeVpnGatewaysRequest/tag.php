<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The status of the pending order.
     *
     *   **1**: indicates that the order for renewal or the order for renewal with a specification change has not taken effect.
     *   **2**: indicates that the order for a temporary upgrade has taken effect. After the temporary upgrade expires, the system restores the VPN gateway to its previous specifications. In this case, **ReservationIpsec**, **ReservationMaxConnections**, **ReservationSpec**, and **ReservationSsl** indicate the previous specification.
     *
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the VPC to which the VPN gateway belongs.
     *
     * @example FinanceJoshua
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways\vpnGateway\tags;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The maximum number of concurrent SSL-VPN connections of the pending order.
     *
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description If the order type is **TEMP_UPGRADE** (temporary upgrade), this parameter specifies the time when the temporary upgrade expires.
     *
     * If the order type is **RENEWCHANGE** (renewal with an upgrade or a downgrade) or **RENEW** (renewal), this parameter indicates the time when the renewal or renewal with an upgrade or a downgrade takes effect.
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

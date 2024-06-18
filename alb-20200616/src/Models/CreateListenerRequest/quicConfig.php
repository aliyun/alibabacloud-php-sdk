<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest;

use AlibabaCloud\Tea\Model;

class quicConfig extends Model
{
    /**
     * @description The ID of the QUIC listener that you want to associate with the ALB instance. This parameter is required if you set **QuicUpgradeEnabled** to **true**.
     *
     * >  The original listener and the QUIC listener must belong to the same ALB instance.
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $quicListenerId;

    /**
     * @description Specifies whether to enable QUIC upgrade. Valid values:
     *
     *   **true**:
     *   **false** (default)
     *
     * >  Only HTTPS listeners support this parameter.
     * @example false
     *
     * @var bool
     */
    public $quicUpgradeEnabled;
    protected $_name = [
        'quicListenerId'     => 'QuicListenerId',
        'quicUpgradeEnabled' => 'QuicUpgradeEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quicListenerId) {
            $res['QuicListenerId'] = $this->quicListenerId;
        }
        if (null !== $this->quicUpgradeEnabled) {
            $res['QuicUpgradeEnabled'] = $this->quicUpgradeEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quicConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuicListenerId'])) {
            $model->quicListenerId = $map['QuicListenerId'];
        }
        if (isset($map['QuicUpgradeEnabled'])) {
            $model->quicUpgradeEnabled = $map['QuicUpgradeEnabled'];
        }

        return $model;
    }
}

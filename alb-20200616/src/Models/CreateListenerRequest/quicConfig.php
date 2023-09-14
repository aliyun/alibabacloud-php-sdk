<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest;

use AlibabaCloud\Tea\Model;

class quicConfig extends Model
{
    /**
     * @description The ID of the QUIC listener that you want to associate with the HTTPS listener. Only HTTPS listeners support this parameter. This parameter is required when **QuicUpgradeEnabled** is set to **true**.
     *
     * > You must add the HTTPS listener and the QUIC listener to the same ALB instance. In addition, make sure that the QUIC listener has never been associated with another listener.
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $quicListenerId;

    /**
     * @description Specifies whether to enable QUIC upgrade. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * > This parameter is available only when you create an HTTPS listener.
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

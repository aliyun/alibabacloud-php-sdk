<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest;

use AlibabaCloud\Tea\Model;

class quicConfig extends Model
{
    /**
     * @description The QUIC listener ID. This parameter is required if **QuicUpgradeEnabled** is set to **true**. Only HTTPS listeners support this parameter.
     *
     * > You must add the HTTPS listener and the QUIC listener to the same ALB instance. In addition, make sure that the QUIC listener has never been associated with another listener.
     * @example lsn-333
     *
     * @var string
     */
    public $quicListenerId;

    /**
     * @description Specifies whether to enable QUIC upgrade. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > Only HTTPS listeners support this parameter.
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

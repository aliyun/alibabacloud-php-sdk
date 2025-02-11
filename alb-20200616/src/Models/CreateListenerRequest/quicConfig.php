<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest;

use AlibabaCloud\Dara\Model;

class quicConfig extends Model
{
    /**
     * @var string
     */
    public $quicListenerId;
    /**
     * @var bool
     */
    public $quicUpgradeEnabled;
    protected $_name = [
        'quicListenerId'     => 'QuicListenerId',
        'quicUpgradeEnabled' => 'QuicUpgradeEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetSenderAddressListResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\GetSenderAddressListResponseBody\data\senderAddressNotificationInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var senderAddressNotificationInfo[]
     */
    public $senderAddressNotificationInfo;
    protected $_name = [
        'senderAddressNotificationInfo' => 'senderAddressNotificationInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->senderAddressNotificationInfo) {
            $res['senderAddressNotificationInfo'] = [];
            if (null !== $this->senderAddressNotificationInfo && \is_array($this->senderAddressNotificationInfo)) {
                $n = 0;
                foreach ($this->senderAddressNotificationInfo as $item) {
                    $res['senderAddressNotificationInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['senderAddressNotificationInfo'])) {
            if (!empty($map['senderAddressNotificationInfo'])) {
                $model->senderAddressNotificationInfo = [];
                $n                                    = 0;
                foreach ($map['senderAddressNotificationInfo'] as $item) {
                    $model->senderAddressNotificationInfo[$n++] = null !== $item ? senderAddressNotificationInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models\GetAccountListResponseBody;

use AlibabaCloud\SDK\Dm\V20170622\Models\GetAccountListResponseBody\data\accountNotificationInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var accountNotificationInfo[]
     */
    public $accountNotificationInfo;
    protected $_name = [
        'accountNotificationInfo' => 'accountNotificationInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNotificationInfo) {
            $res['accountNotificationInfo'] = [];
            if (null !== $this->accountNotificationInfo && \is_array($this->accountNotificationInfo)) {
                $n = 0;
                foreach ($this->accountNotificationInfo as $item) {
                    $res['accountNotificationInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['accountNotificationInfo'])) {
            if (!empty($map['accountNotificationInfo'])) {
                $model->accountNotificationInfo = [];
                $n                              = 0;
                foreach ($map['accountNotificationInfo'] as $item) {
                    $model->accountNotificationInfo[$n++] = null !== $item ? accountNotificationInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

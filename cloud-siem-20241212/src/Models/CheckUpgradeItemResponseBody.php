<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CheckUpgradeItemResponseBody\upgradeItem;

class CheckUpgradeItemResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var upgradeItem
     */
    public $upgradeItem;
    protected $_name = [
        'requestId' => 'RequestId',
        'upgradeItem' => 'UpgradeItem',
    ];

    public function validate()
    {
        if (null !== $this->upgradeItem) {
            $this->upgradeItem->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->upgradeItem) {
            $res['UpgradeItem'] = null !== $this->upgradeItem ? $this->upgradeItem->toArray($noStream) : $this->upgradeItem;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UpgradeItem'])) {
            $model->upgradeItem = upgradeItem::fromMap($map['UpgradeItem']);
        }

        return $model;
    }
}

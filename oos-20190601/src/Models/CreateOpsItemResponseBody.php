<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateOpsItemResponseBody\opsItem;

class CreateOpsItemResponseBody extends Model
{
    /**
     * @var opsItem
     */
    public $opsItem;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'opsItem' => 'OpsItem',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->opsItem) {
            $this->opsItem->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opsItem) {
            $res['OpsItem'] = null !== $this->opsItem ? $this->opsItem->toArray($noStream) : $this->opsItem;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OpsItem'])) {
            $model->opsItem = opsItem::fromMap($map['OpsItem']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

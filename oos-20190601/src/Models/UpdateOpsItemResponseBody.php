<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateOpsItemResponseBody\opsItem;
use AlibabaCloud\Tea\Model;

class UpdateOpsItemResponseBody extends Model
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
        'opsItem'   => 'OpsItem',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opsItem) {
            $res['OpsItem'] = null !== $this->opsItem ? $this->opsItem->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOpsItemResponseBody
     */
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

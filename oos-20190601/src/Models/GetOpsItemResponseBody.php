<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetOpsItemResponseBody\opsItem;
use AlibabaCloud\Tea\Model;

class GetOpsItemResponseBody extends Model
{
    /**
     * @description The information about the O\\&M item.
     *
     * @var opsItem
     */
    public $opsItem;

    /**
     * @description The request ID.
     *
     * @example 8BED4C16-BD30-5E27-94D4-7EBCCECF70C1
     *
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
     * @return GetOpsItemResponseBody
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

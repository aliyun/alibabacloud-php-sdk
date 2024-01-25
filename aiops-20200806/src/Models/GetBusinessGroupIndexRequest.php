<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetBusinessGroupIndexRequest extends Model
{
    /**
     * @var string
     */
    public $businessGroupId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $productId;
    protected $_name = [
        'businessGroupId' => 'BusinessGroupId',
        'operaUid'        => 'OperaUid',
        'productId'       => 'ProductId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBusinessGroupIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryResellerAvailableQuotaRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $itemCodes;
    protected $_name = [
        'ownerId'   => 'OwnerId',
        'itemCodes' => 'ItemCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->itemCodes) {
            $res['ItemCodes'] = $this->itemCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryResellerAvailableQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ItemCodes'])) {
            $model->itemCodes = $map['ItemCodes'];
        }

        return $model;
    }
}

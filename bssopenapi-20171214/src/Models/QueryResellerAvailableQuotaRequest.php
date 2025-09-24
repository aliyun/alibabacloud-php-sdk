<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class QueryResellerAvailableQuotaRequest extends Model
{
    /**
     * @var string
     */
    public $itemCodes;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'itemCodes' => 'ItemCodes',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemCodes) {
            $res['ItemCodes'] = $this->itemCodes;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['ItemCodes'])) {
            $model->itemCodes = $map['ItemCodes'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}

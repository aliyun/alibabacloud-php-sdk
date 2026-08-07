<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class QueryInspirationBalanceForPartnerRequest extends Model
{
    /**
     * @var string
     */
    public $belongId;

    /**
     * @var string
     */
    public $belongIdType;
    protected $_name = [
        'belongId' => 'BelongId',
        'belongIdType' => 'BelongIdType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->belongId) {
            $res['BelongId'] = $this->belongId;
        }

        if (null !== $this->belongIdType) {
            $res['BelongIdType'] = $this->belongIdType;
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
        if (isset($map['BelongId'])) {
            $model->belongId = $map['BelongId'];
        }

        if (isset($map['BelongIdType'])) {
            $model->belongIdType = $map['BelongIdType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewTypeIdList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewTypeIdList\reviewTypeIdList\reviewKeyIdList;

class reviewTypeIdList extends Model
{
    /**
     * @var reviewKeyIdList
     */
    public $reviewKeyIdList;
    /**
     * @var int
     */
    public $reviewTypeId;
    protected $_name = [
        'reviewKeyIdList' => 'ReviewKeyIdList',
        'reviewTypeId'    => 'ReviewTypeId',
    ];

    public function validate()
    {
        if (null !== $this->reviewKeyIdList) {
            $this->reviewKeyIdList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reviewKeyIdList) {
            $res['ReviewKeyIdList'] = null !== $this->reviewKeyIdList ? $this->reviewKeyIdList->toArray($noStream) : $this->reviewKeyIdList;
        }

        if (null !== $this->reviewTypeId) {
            $res['ReviewTypeId'] = $this->reviewTypeId;
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
        if (isset($map['ReviewKeyIdList'])) {
            $model->reviewKeyIdList = reviewKeyIdList::fromMap($map['ReviewKeyIdList']);
        }

        if (isset($map['ReviewTypeId'])) {
            $model->reviewTypeId = $map['ReviewTypeId'];
        }

        return $model;
    }
}

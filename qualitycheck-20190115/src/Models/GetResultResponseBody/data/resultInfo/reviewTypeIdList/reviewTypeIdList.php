<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewTypeIdList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewTypeIdList\reviewTypeIdList\reviewKeyIdList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewKeyIdList) {
            $res['ReviewKeyIdList'] = null !== $this->reviewKeyIdList ? $this->reviewKeyIdList->toMap() : null;
        }
        if (null !== $this->reviewTypeId) {
            $res['ReviewTypeId'] = $this->reviewTypeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewTypeIdList
     */
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

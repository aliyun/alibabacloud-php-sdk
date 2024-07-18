<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewTypeIdList\reviewTypeIdList;

use AlibabaCloud\Tea\Model;

class reviewKeyIdList extends Model
{
    /**
     * @var int[]
     */
    public $reviewKeyIdList;
    protected $_name = [
        'reviewKeyIdList' => 'ReviewKeyIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewKeyIdList) {
            $res['ReviewKeyIdList'] = $this->reviewKeyIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewKeyIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewKeyIdList'])) {
            if (!empty($map['ReviewKeyIdList'])) {
                $model->reviewKeyIdList = $map['ReviewKeyIdList'];
            }
        }

        return $model;
    }
}

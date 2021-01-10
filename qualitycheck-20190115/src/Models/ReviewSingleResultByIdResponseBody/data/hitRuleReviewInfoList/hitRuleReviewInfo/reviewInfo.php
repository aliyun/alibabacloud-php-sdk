<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo;

use AlibabaCloud\Tea\Model;

class reviewInfo extends Model
{
    /**
     * @var string
     */
    public $hitId;

    /**
     * @var int
     */
    public $rid;
    protected $_name = [
        'hitId' => 'HitId',
        'rid'   => 'Rid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitId) {
            $res['HitId'] = $this->hitId;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitId'])) {
            $model->hitId = $map['HitId'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}

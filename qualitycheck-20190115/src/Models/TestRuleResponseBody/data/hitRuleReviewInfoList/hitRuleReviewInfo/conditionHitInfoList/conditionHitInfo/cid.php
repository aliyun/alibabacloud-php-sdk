<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo;

use AlibabaCloud\Tea\Model;

class cid extends Model
{
    /**
     * @var string[]
     */
    public $cid;
    protected $_name = [
        'cid' => 'cid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cid
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cid'])) {
            if (!empty($map['cid'])) {
                $model->cid = $map['cid'];
            }
        }

        return $model;
    }
}

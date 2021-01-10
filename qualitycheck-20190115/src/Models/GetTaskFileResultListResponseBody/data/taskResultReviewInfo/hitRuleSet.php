<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskFileResultListResponseBody\data\taskResultReviewInfo;

use AlibabaCloud\Tea\Model;

class hitRuleSet extends Model
{
    /**
     * @var string[]
     */
    public $hitRuleSet;
    protected $_name = [
        'hitRuleSet' => 'HitRuleSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitRuleSet) {
            $res['HitRuleSet'] = $this->hitRuleSet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitRuleSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitRuleSet'])) {
            if (!empty($map['HitRuleSet'])) {
                $model->hitRuleSet = $map['HitRuleSet'];
            }
        }

        return $model;
    }
}

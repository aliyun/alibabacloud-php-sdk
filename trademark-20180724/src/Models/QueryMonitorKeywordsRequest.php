<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryMonitorKeywordsRequest extends Model
{
    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string[]
     */
    public $keywords;
    protected $_name = [
        'ruleType' => 'RuleType',
        'keywords' => 'Keywords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMonitorKeywordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = $map['Keywords'];
            }
        }

        return $model;
    }
}

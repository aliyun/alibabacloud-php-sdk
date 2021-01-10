<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\reviewers\reviewer;
use AlibabaCloud\Tea\Model;

class reviewers extends Model
{
    /**
     * @var reviewer[]
     */
    public $reviewer;
    protected $_name = [
        'reviewer' => 'Reviewer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewer) {
            $res['Reviewer'] = [];
            if (null !== $this->reviewer && \is_array($this->reviewer)) {
                $n = 0;
                foreach ($this->reviewer as $item) {
                    $res['Reviewer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reviewer'])) {
            if (!empty($map['Reviewer'])) {
                $model->reviewer = [];
                $n               = 0;
                foreach ($map['Reviewer'] as $item) {
                    $model->reviewer[$n++] = null !== $item ? reviewer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

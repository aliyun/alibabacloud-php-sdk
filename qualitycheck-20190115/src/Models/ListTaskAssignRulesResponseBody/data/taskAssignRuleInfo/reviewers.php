<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\reviewers\reviewer;

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
        if (\is_array($this->reviewer)) {
            Model::validateArray($this->reviewer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reviewer) {
            if (\is_array($this->reviewer)) {
                $res['Reviewer'] = [];
                $n1 = 0;
                foreach ($this->reviewer as $item1) {
                    $res['Reviewer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Reviewer'])) {
            if (!empty($map['Reviewer'])) {
                $model->reviewer = [];
                $n1 = 0;
                foreach ($map['Reviewer'] as $item1) {
                    $model->reviewer[$n1] = reviewer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

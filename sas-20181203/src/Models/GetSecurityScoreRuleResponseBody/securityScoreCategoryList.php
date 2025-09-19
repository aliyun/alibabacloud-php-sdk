<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody\securityScoreCategoryList\securityRuleList;

class securityScoreCategoryList extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $score;

    /**
     * @var securityRuleList[]
     */
    public $securityRuleList;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'category' => 'Category',
        'score' => 'Score',
        'securityRuleList' => 'SecurityRuleList',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->securityRuleList)) {
            Model::validateArray($this->securityRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->securityRuleList) {
            if (\is_array($this->securityRuleList)) {
                $res['SecurityRuleList'] = [];
                $n1 = 0;
                foreach ($this->securityRuleList as $item1) {
                    $res['SecurityRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['SecurityRuleList'])) {
            if (!empty($map['SecurityRuleList'])) {
                $model->securityRuleList = [];
                $n1 = 0;
                foreach ($map['SecurityRuleList'] as $item1) {
                    $model->securityRuleList[$n1] = securityRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

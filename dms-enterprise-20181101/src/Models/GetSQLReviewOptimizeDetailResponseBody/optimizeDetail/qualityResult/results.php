<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody\optimizeDetail\qualityResult;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody\optimizeDetail\qualityResult\results\scripts;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $comments;

    /**
     * @example MUST_IMPROVE
     *
     * @var string
     */
    public $feedback;

    /**
     * @var string[]
     */
    public $messages;

    /**
     * @example SELECT_SUGGEST_ASSIGN_WHERE
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example REVIEW
     *
     * @var string
     */
    public $ruleType;

    /**
     * @var scripts[]
     */
    public $scripts;
    protected $_name = [
        'comments' => 'Comments',
        'feedback' => 'Feedback',
        'messages' => 'Messages',
        'ruleName' => 'RuleName',
        'ruleType' => 'RuleType',
        'scripts'  => 'Scripts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->messages) {
            $res['Messages'] = $this->messages;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->scripts) {
            $res['Scripts'] = [];
            if (null !== $this->scripts && \is_array($this->scripts)) {
                $n = 0;
                foreach ($this->scripts as $item) {
                    $res['Scripts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = $map['Messages'];
            }
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Scripts'])) {
            if (!empty($map['Scripts'])) {
                $model->scripts = [];
                $n              = 0;
                foreach ($map['Scripts'] as $item) {
                    $model->scripts[$n++] = null !== $item ? scripts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeFunctionFeedbackResponseBody\data;

use AlibabaCloud\Tea\Model;

class feedback extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'category'     => 'Category',
        'creationTime' => 'CreationTime',
        'feedback'     => 'Feedback',
        'finishedTime' => 'FinishedTime',
        'functionName' => 'FunctionName',
        'suggestion'   => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return feedback
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}

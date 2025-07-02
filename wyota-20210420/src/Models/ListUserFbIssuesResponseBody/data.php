<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbIssuesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbIssuesResponseBody\data\feedbackIssueData;

class data extends Model
{
    /**
     * @var string
     */
    public $count;

    /**
     * @var feedbackIssueData[]
     */
    public $feedbackIssueData;
    protected $_name = [
        'count' => 'Count',
        'feedbackIssueData' => 'FeedbackIssueData',
    ];

    public function validate()
    {
        if (\is_array($this->feedbackIssueData)) {
            Model::validateArray($this->feedbackIssueData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->feedbackIssueData) {
            if (\is_array($this->feedbackIssueData)) {
                $res['FeedbackIssueData'] = [];
                $n1 = 0;
                foreach ($this->feedbackIssueData as $item1) {
                    $res['FeedbackIssueData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['FeedbackIssueData'])) {
            if (!empty($map['FeedbackIssueData'])) {
                $model->feedbackIssueData = [];
                $n1 = 0;
                foreach ($map['FeedbackIssueData'] as $item1) {
                    $model->feedbackIssueData[$n1] = feedbackIssueData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

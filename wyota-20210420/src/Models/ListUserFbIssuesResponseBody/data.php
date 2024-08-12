<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbIssuesResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbIssuesResponseBody\data\feedbackIssueData;
use AlibabaCloud\Tea\Model;

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
        'count'             => 'Count',
        'feedbackIssueData' => 'FeedbackIssueData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->feedbackIssueData) {
            $res['FeedbackIssueData'] = [];
            if (null !== $this->feedbackIssueData && \is_array($this->feedbackIssueData)) {
                $n = 0;
                foreach ($this->feedbackIssueData as $item) {
                    $res['FeedbackIssueData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FeedbackIssueData'])) {
            if (!empty($map['FeedbackIssueData'])) {
                $model->feedbackIssueData = [];
                $n                        = 0;
                foreach ($map['FeedbackIssueData'] as $item) {
                    $model->feedbackIssueData[$n++] = null !== $item ? feedbackIssueData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

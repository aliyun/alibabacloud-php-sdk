<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $category;

    /**
     * @example 5
     *
     * @var string
     */
    public $content;

    /**
     * @example score
     *
     * @var string
     */
    public $summaryName;
    protected $_name = [
        'category'    => 'Category',
        'content'     => 'Content',
        'summaryName' => 'SummaryName',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->summaryName) {
            $res['SummaryName'] = $this->summaryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SummaryName'])) {
            $model->summaryName = $map['SummaryName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsResponseBody\jobs\tasks\conversation;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $summaryName;
    protected $_name = [
        'category' => 'Category',
        'content' => 'Content',
        'summaryName' => 'SummaryName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['SummaryName'])) {
            $model->summaryName = $map['SummaryName'];
        }

        return $model;
    }
}

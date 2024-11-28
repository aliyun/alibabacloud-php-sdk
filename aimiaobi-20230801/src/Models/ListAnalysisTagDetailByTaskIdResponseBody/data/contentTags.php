<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAnalysisTagDetailByTaskIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class contentTags extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $summaryOverview;

    /**
     * @example xxx
     *
     * @var string
     */
    public $tagName;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'summaryOverview' => 'SummaryOverview',
        'tagName'         => 'TagName',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summaryOverview) {
            $res['SummaryOverview'] = $this->summaryOverview;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contentTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SummaryOverview'])) {
            $model->summaryOverview = $map['SummaryOverview'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}

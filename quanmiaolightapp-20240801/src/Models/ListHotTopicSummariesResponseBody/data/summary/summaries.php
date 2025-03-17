<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data\summary;

use AlibabaCloud\Tea\Model;

class summaries extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $summary;

    /**
     * @example xx
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'summary' => 'summary',
        'title' => 'title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}

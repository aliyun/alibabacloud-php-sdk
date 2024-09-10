<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDocClusterTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @var string[]
     */
    public $docIds;

    /**
     * @example 聚类主题摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @example 聚类主题名
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'docIds'  => 'DocIds',
        'summary' => 'Summary',
        'title'   => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docIds) {
            $res['DocIds'] = $this->docIds;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocIds'])) {
            if (!empty($map['DocIds'])) {
                $model->docIds = $map['DocIds'];
            }
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

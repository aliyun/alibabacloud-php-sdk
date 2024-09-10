<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDocClusterTaskRequest;

use AlibabaCloud\Tea\Model;

class documents extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 文档内容
     *
     * @var string
     */
    public $content;

    /**
     * @example 文档ID。用于在返回聚类文章时标识文章。如果文章列表中都不传则使用数组索引作为ID。如果部分传则会报错
     *
     * @var string
     */
    public $docId;

    /**
     * @example 文档标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'content' => 'Content',
        'docId'   => 'DocId',
        'title'   => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

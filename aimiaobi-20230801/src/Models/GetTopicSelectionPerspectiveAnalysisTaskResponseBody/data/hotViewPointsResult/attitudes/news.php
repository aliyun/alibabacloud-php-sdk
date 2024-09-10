<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\hotViewPointsResult\attitudes;

use AlibabaCloud\Tea\Model;

class news extends Model
{
    /**
     * @example 9957175DEDCF49C5ACF7A956B4FD67B2
     *
     * @var string
     */
    public $docId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example https://www.example.com/aaa.png
     *
     * @var string[]
     */
    public $imageUrls;

    /**
     * @example ["标签1","标签2"]
     *
     * @var string[]
     */
    public $tags;

    /**
     * @example 文章主题
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'docId'     => 'DocId',
        'docUuid'   => 'DocUuid',
        'imageUrls' => 'ImageUrls',
        'tags'      => 'Tags',
        'topic'     => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->imageUrls) {
            $res['ImageUrls'] = $this->imageUrls;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return news
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['ImageUrls'])) {
            if (!empty($map['ImageUrls'])) {
                $model->imageUrls = $map['ImageUrls'];
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}

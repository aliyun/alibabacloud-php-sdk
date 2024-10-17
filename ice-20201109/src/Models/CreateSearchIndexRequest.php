<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateSearchIndexRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $indexConfig;

    /**
     * @example Active
     *
     * @var string
     */
    public $indexStatus;

    /**
     * @description The category of the index. Valid values:
     *
     *   mm: large visual model. You can use this model to describe complex visual features and identify and search for specific actions, movements, and events in videos, such as when athletes score a goal or get injured.
     *
     * >  This feature is in the public preview phase. You can use this feature for free for 1,000 hours of videos.
     *
     *   face: face recognition. You can use the face recognition technology to describe face characteristics and automatically mark or search for faces in videos.
     *   aiLabel: smart tagging. The smart tagging category is used to describe content such as subtitles and audio in videos. You can use the speech recognition technology to automatically extract, mark, and search for subtitles and dialog content from videos. This helps you quickly locate the video content that is related to specific topics or keywords.
     *
     * This parameter is required.
     * @example mm
     *
     * @var string
     */
    public $indexType;

    /**
     * @example test1
     *
     * @var string
     */
    public $searchLibName;
    protected $_name = [
        'indexConfig'   => 'IndexConfig',
        'indexStatus'   => 'IndexStatus',
        'indexType'     => 'IndexType',
        'searchLibName' => 'SearchLibName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexConfig) {
            $res['IndexConfig'] = $this->indexConfig;
        }
        if (null !== $this->indexStatus) {
            $res['IndexStatus'] = $this->indexStatus;
        }
        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSearchIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexConfig'])) {
            $model->indexConfig = $map['IndexConfig'];
        }
        if (isset($map['IndexStatus'])) {
            $model->indexStatus = $map['IndexStatus'];
        }
        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\imageSearchResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\imageSearchResult\searchResult\article;
use AlibabaCloud\Tea\Model;

class searchResult extends Model
{
    /**
     * @var article
     */
    public $article;

    /**
     * @example xx
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example xx
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'article' => 'Article',
        'fileUrl' => 'FileUrl',
        'mediaId' => 'MediaId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->article) {
            $res['Article'] = null !== $this->article ? $this->article->toMap() : null;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Article'])) {
            $model->article = article::fromMap($map['Article']);
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\videoSearchResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\videoSearchResult\searchResult\article;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\videoSearchResult\searchResult\clipInfos;
use AlibabaCloud\Tea\Model;

class searchResult extends Model
{
    /**
     * @var article
     */
    public $article;

    /**
     * @var clipInfos[]
     */
    public $clipInfos;

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
        'article'   => 'Article',
        'clipInfos' => 'ClipInfos',
        'fileUrl'   => 'FileUrl',
        'mediaId'   => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->article) {
            $res['Article'] = null !== $this->article ? $this->article->toMap() : null;
        }
        if (null !== $this->clipInfos) {
            $res['ClipInfos'] = [];
            if (null !== $this->clipInfos && \is_array($this->clipInfos)) {
                $n = 0;
                foreach ($this->clipInfos as $item) {
                    $res['ClipInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ClipInfos'])) {
            if (!empty($map['ClipInfos'])) {
                $model->clipInfos = [];
                $n                = 0;
                foreach ($map['ClipInfos'] as $item) {
                    $model->clipInfos[$n++] = null !== $item ? clipInfos::fromMap($item) : $item;
                }
            }
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

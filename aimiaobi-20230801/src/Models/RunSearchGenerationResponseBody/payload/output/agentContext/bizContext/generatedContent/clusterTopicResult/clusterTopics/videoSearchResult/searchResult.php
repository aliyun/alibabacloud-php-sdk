<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\videoSearchResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\videoSearchResult\searchResult\article;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\videoSearchResult\searchResult\clipInfos;

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
     * @var string
     */
    public $fileUrl;
    /**
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
        if (null !== $this->article) {
            $this->article->validate();
        }
        if (\is_array($this->clipInfos)) {
            Model::validateArray($this->clipInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->article) {
            $res['Article'] = null !== $this->article ? $this->article->toArray($noStream) : $this->article;
        }

        if (null !== $this->clipInfos) {
            if (\is_array($this->clipInfos)) {
                $res['ClipInfos'] = [];
                $n1               = 0;
                foreach ($this->clipInfos as $item1) {
                    $res['ClipInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Article'])) {
            $model->article = article::fromMap($map['Article']);
        }

        if (isset($map['ClipInfos'])) {
            if (!empty($map['ClipInfos'])) {
                $model->clipInfos = [];
                $n1               = 0;
                foreach ($map['ClipInfos'] as $item1) {
                    $model->clipInfos[$n1++] = clipInfos::fromMap($item1);
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

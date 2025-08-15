<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\textGenerateMultimodalMediaList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\textGenerateMultimodalMediaList\multimodalMediaList\article;

class multimodalMediaList extends Model
{
    /**
     * @var article
     */
    public $article;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaType;
    protected $_name = [
        'article' => 'Article',
        'fileUrl' => 'FileUrl',
        'mediaId' => 'MediaId',
        'mediaType' => 'MediaType',
    ];

    public function validate()
    {
        if (null !== $this->article) {
            $this->article->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->article) {
            $res['Article'] = null !== $this->article ? $this->article->toArray($noStream) : $this->article;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
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

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        return $model;
    }
}

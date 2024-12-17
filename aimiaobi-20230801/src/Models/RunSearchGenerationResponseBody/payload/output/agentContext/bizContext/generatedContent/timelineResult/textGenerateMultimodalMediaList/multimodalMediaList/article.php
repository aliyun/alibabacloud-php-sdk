<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\textGenerateMultimodalMediaList\multimodalMediaList;

use AlibabaCloud\Tea\Model;

class article extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $docId;

    /**
     * @example xx
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example 互联网搜索
     *
     * @var string
     */
    public $searchSourceName;

    /**
     * @example xx
     *
     * @var string
     */
    public $summary;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $title;

    /**
     * @example xx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'docId'            => 'DocId',
        'docUuid'          => 'DocUuid',
        'searchSourceName' => 'SearchSourceName',
        'summary'          => 'Summary',
        'title'            => 'Title',
        'url'              => 'Url',
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
        if (null !== $this->searchSourceName) {
            $res['SearchSourceName'] = $this->searchSourceName;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return article
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
        if (isset($map['SearchSourceName'])) {
            $model->searchSourceName = $map['SearchSourceName'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

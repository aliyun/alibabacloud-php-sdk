<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext\bizContext\multimodalMediaSelection\textSearchResult;

use AlibabaCloud\Tea\Model;

class searchResult extends Model
{
    /**
     * @var string[]
     */
    public $chunks;

    /**
     * @example 文章内容
     *
     * @var string
     */
    public $content;

    /**
     * @example 文档-自定义的唯一ID
     *
     * @var string
     */
    public $docId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example 2024-11-25 14:25:59
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 1
     *
     * @var float
     */
    public $score;

    /**
     * @example QuarkCommonNews
     *
     * @var string
     */
    public $searchSource;

    /**
     * @example 互联网搜索
     *
     * @var string
     */
    public $searchSourceName;

    /**
     * @example SystemSearch
     *
     * @var string
     */
    public $searchSourceType;

    /**
     * @example 新华社
     *
     * @var string
     */
    public $source;

    /**
     * @example 文章摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @example 文章标题
     *
     * @var string
     */
    public $title;

    /**
     * @example https://www.example.com/aaa.docx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'chunks' => 'Chunks',
        'content' => 'Content',
        'docId' => 'DocId',
        'docUuid' => 'DocUuid',
        'pubTime' => 'PubTime',
        'score' => 'Score',
        'searchSource' => 'SearchSource',
        'searchSourceName' => 'SearchSourceName',
        'searchSourceType' => 'SearchSourceType',
        'source' => 'Source',
        'summary' => 'Summary',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunks) {
            $res['Chunks'] = $this->chunks;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->searchSource) {
            $res['SearchSource'] = $this->searchSource;
        }
        if (null !== $this->searchSourceName) {
            $res['SearchSourceName'] = $this->searchSourceName;
        }
        if (null !== $this->searchSourceType) {
            $res['SearchSourceType'] = $this->searchSourceType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
     * @return searchResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Chunks'])) {
            if (!empty($map['Chunks'])) {
                $model->chunks = $map['Chunks'];
            }
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SearchSource'])) {
            $model->searchSource = $map['SearchSource'];
        }
        if (isset($map['SearchSourceName'])) {
            $model->searchSourceName = $map['SearchSourceName'];
        }
        if (isset($map['SearchSourceType'])) {
            $model->searchSourceType = $map['SearchSourceType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
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

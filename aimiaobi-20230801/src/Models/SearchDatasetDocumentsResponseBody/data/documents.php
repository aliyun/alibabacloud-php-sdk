<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchDatasetDocumentsResponseBody\data;

use AlibabaCloud\Tea\Model;

class documents extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $content;

    /**
     * @example 用户指定的文档唯一ID
     *
     * @var string
     */
    public $docId;

    /**
     * @example 内部文档唯一ID
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example 2024-12-09 17:09:40
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 来源
     *
     * @var string
     */
    public $sourceFrom;

    /**
     * @example 文章摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @example xx
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
        'content'    => 'Content',
        'docId'      => 'DocId',
        'docUuid'    => 'DocUuid',
        'pubTime'    => 'PubTime',
        'sourceFrom' => 'SourceFrom',
        'summary'    => 'Summary',
        'title'      => 'Title',
        'url'        => 'Url',
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
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->sourceFrom) {
            $res['SourceFrom'] = $this->sourceFrom;
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
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['SourceFrom'])) {
            $model->sourceFrom = $map['SourceFrom'];
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

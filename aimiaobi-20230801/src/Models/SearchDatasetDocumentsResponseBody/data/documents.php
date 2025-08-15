<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchDatasetDocumentsResponseBody\data;

use AlibabaCloud\Dara\Model;

class documents extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $docUuid;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $sourceFrom;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'Content',
        'docId' => 'DocId',
        'docUuid' => 'DocUuid',
        'pubTime' => 'PubTime',
        'sourceFrom' => 'SourceFrom',
        'summary' => 'Summary',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

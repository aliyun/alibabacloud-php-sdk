<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetDocumentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetDocumentResponseBody\data\metadata;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $disableHandleMultimodalMedia;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $docUuid;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $sourceFrom;

    /**
     * @var int
     */
    public $status;

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
        'disableHandleMultimodalMedia' => 'DisableHandleMultimodalMedia',
        'docId' => 'DocId',
        'docType' => 'DocType',
        'docUuid' => 'DocUuid',
        'metadata' => 'Metadata',
        'pubTime' => 'PubTime',
        'sourceFrom' => 'SourceFrom',
        'status' => 'Status',
        'summary' => 'Summary',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->disableHandleMultimodalMedia) {
            $res['DisableHandleMultimodalMedia'] = $this->disableHandleMultimodalMedia;
        }

        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }

        if (null !== $this->sourceFrom) {
            $res['SourceFrom'] = $this->sourceFrom;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['DisableHandleMultimodalMedia'])) {
            $model->disableHandleMultimodalMedia = $map['DisableHandleMultimodalMedia'];
        }

        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = metadata::fromMap($map['Metadata']);
        }

        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }

        if (isset($map['SourceFrom'])) {
            $model->sourceFrom = $map['SourceFrom'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

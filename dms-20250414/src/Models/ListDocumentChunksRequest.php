<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ListDocumentChunksRequest extends Model
{
    /**
     * @var string
     */
    public $chunkTitlePattern;

    /**
     * @var string
     */
    public $documentName;

    /**
     * @var string
     */
    public $kbUuid;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $sortFieldName;

    /**
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'chunkTitlePattern' => 'ChunkTitlePattern',
        'documentName' => 'DocumentName',
        'kbUuid' => 'KbUuid',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'sortFieldName' => 'SortFieldName',
        'sortOrder' => 'SortOrder',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkTitlePattern) {
            $res['ChunkTitlePattern'] = $this->chunkTitlePattern;
        }

        if (null !== $this->documentName) {
            $res['DocumentName'] = $this->documentName;
        }

        if (null !== $this->kbUuid) {
            $res['KbUuid'] = $this->kbUuid;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->sortFieldName) {
            $res['SortFieldName'] = $this->sortFieldName;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
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
        if (isset($map['ChunkTitlePattern'])) {
            $model->chunkTitlePattern = $map['ChunkTitlePattern'];
        }

        if (isset($map['DocumentName'])) {
            $model->documentName = $map['DocumentName'];
        }

        if (isset($map['KbUuid'])) {
            $model->kbUuid = $map['KbUuid'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['SortFieldName'])) {
            $model->sortFieldName = $map['SortFieldName'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}

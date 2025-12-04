<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListDocumentRetrieveRequest extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $elementScope;

    /**
     * @var string
     */
    public $endDate;

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
    public $office;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $subContentType;

    /**
     * @var string
     */
    public $wordSize;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'contentType' => 'ContentType',
        'elementScope' => 'ElementScope',
        'endDate' => 'EndDate',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'office' => 'Office',
        'query' => 'Query',
        'region' => 'Region',
        'source' => 'Source',
        'startDate' => 'StartDate',
        'subContentType' => 'SubContentType',
        'wordSize' => 'WordSize',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->elementScope) {
            $res['ElementScope'] = $this->elementScope;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->office) {
            $res['Office'] = $this->office;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->subContentType) {
            $res['SubContentType'] = $this->subContentType;
        }

        if (null !== $this->wordSize) {
            $res['WordSize'] = $this->wordSize;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['ElementScope'])) {
            $model->elementScope = $map['ElementScope'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Office'])) {
            $model->office = $map['Office'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['SubContentType'])) {
            $model->subContentType = $map['SubContentType'];
        }

        if (isset($map['WordSize'])) {
            $model->wordSize = $map['WordSize'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListEditingProjectsRequest extends Model
{
    /**
     * @example OpenAPI
     *
     * @var string
     */
    public $createSource;

    /**
     * @example 2022-02-02T23:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example ******6f36bc45d09a9d5cde49******
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 10
     *
     * @var string
     */
    public $maxResults;

    /**
     * @example 8EqYpQbZ6Eh7+Zz8DxVYoQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example EditingProject
     *
     * @var string
     */
    public $projectType;

    /**
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example 2017-12-21T08:00:01Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Produced
     *
     * @var string
     */
    public $status;

    /**
     * @example None
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'createSource' => 'CreateSource',
        'endTime'      => 'EndTime',
        'keyword'      => 'Keyword',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'projectType'  => 'ProjectType',
        'sortBy'       => 'SortBy',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEditingProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}

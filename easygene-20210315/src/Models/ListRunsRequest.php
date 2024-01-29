<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class ListRunsRequest extends Model
{
    /**
     * @example MyApp
     *
     * @var string
     */
    public $appName;

    /**
     * @example 4.1.4.1-v1.0
     *
     * @var string
     */
    public $appRevision;

    /**
     * @example S001
     *
     * @var string
     */
    public $entityName;

    /**
     * @example sample
     *
     * @var string
     */
    public $entityType;

    /**
     * @example false
     *
     * @var bool
     */
    public $getTotal;

    /**
     * @example false
     *
     * @var bool
     */
    public $isReversed;

    /**
     * @example env=test
     *
     * @var string
     */
    public $labelSelector;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example createtime
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example run-13BeYuxc0fxO24uA75UppTiMRoQ
     *
     * @var string
     */
    public $search;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example sub-13BeXWnGvrOl3MC124tazcJVKaV
     *
     * @var string
     */
    public $submissionId;

    /**
     * @example test-workspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'       => 'AppName',
        'appRevision'   => 'AppRevision',
        'entityName'    => 'EntityName',
        'entityType'    => 'EntityType',
        'getTotal'      => 'GetTotal',
        'isReversed'    => 'IsReversed',
        'labelSelector' => 'LabelSelector',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'orderBy'       => 'OrderBy',
        'search'        => 'Search',
        'status'        => 'Status',
        'submissionId'  => 'SubmissionId',
        'workspace'     => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appRevision) {
            $res['AppRevision'] = $this->appRevision;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->getTotal) {
            $res['GetTotal'] = $this->getTotal;
        }
        if (null !== $this->isReversed) {
            $res['IsReversed'] = $this->isReversed;
        }
        if (null !== $this->labelSelector) {
            $res['LabelSelector'] = $this->labelSelector;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submissionId) {
            $res['SubmissionId'] = $this->submissionId;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRunsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppRevision'])) {
            $model->appRevision = $map['AppRevision'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['GetTotal'])) {
            $model->getTotal = $map['GetTotal'];
        }
        if (isset($map['IsReversed'])) {
            $model->isReversed = $map['IsReversed'];
        }
        if (isset($map['LabelSelector'])) {
            $model->labelSelector = $map['LabelSelector'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmissionId'])) {
            $model->submissionId = $map['SubmissionId'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}

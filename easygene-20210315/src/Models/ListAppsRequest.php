<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class ListAppsRequest extends Model
{
    /**
     * @example App
     *
     * @var string
     */
    public $appType;

    /**
     * @example true
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
     * @example WDL
     *
     * @var string
     */
    public $language;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Next Token
     *
     * @example TestToken
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
     * @example Public
     *
     * @var string
     */
    public $scope;

    /**
     * @example TestName
     *
     * @var string
     */
    public $search;

    /**
     * @example TestWorkspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appType'       => 'AppType',
        'isReversed'    => 'IsReversed',
        'labelSelector' => 'LabelSelector',
        'language'      => 'Language',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'orderBy'       => 'OrderBy',
        'scope'         => 'Scope',
        'search'        => 'Search',
        'workspace'     => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->isReversed) {
            $res['IsReversed'] = $this->isReversed;
        }
        if (null !== $this->labelSelector) {
            $res['LabelSelector'] = $this->labelSelector;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
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
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['IsReversed'])) {
            $model->isReversed = $map['IsReversed'];
        }
        if (isset($map['LabelSelector'])) {
            $model->labelSelector = $map['LabelSelector'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
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
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}

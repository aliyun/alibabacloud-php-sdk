<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListExperimentRequest\options;
use AlibabaCloud\Tea\Model;

class ListExperimentRequest extends Model
{
    /**
     * @example is_evaluation:true
     *
     * @var string
     */
    public $labels;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example exp-test
     *
     * @var string
     */
    public $name;

    /**
     * @var options
     */
    public $options;

    /**
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @example GmtCreateTime DESC,Name ASC
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $pageToken;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example false
     *
     * @var bool
     */
    public $verbose;

    /**
     * @example 151739
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'labels'      => 'Labels',
        'maxResults'  => 'MaxResults',
        'name'        => 'Name',
        'options'     => 'Options',
        'order'       => 'Order',
        'orderBy'     => 'OrderBy',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'pageToken'   => 'PageToken',
        'sortBy'      => 'SortBy',
        'verbose'     => 'Verbose',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toMap() : null;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageToken) {
            $res['PageToken'] = $this->pageToken;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExperimentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageToken'])) {
            $model->pageToken = $map['PageToken'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

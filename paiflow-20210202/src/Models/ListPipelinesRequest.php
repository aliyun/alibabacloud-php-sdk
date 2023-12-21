<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class ListPipelinesRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $fuzzyMatching;

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
     * @example SqlWriteTable_2
     *
     * @var string
     */
    public $pipelineIdentifier;

    /**
     * @example pai
     *
     * @var string
     */
    public $pipelineProvider;

    /**
     * @example v1
     *
     * @var string
     */
    public $pipelineVersion;

    /**
     * @example 726**
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'fuzzyMatching'      => 'FuzzyMatching',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'pipelineIdentifier' => 'PipelineIdentifier',
        'pipelineProvider'   => 'PipelineProvider',
        'pipelineVersion'    => 'PipelineVersion',
        'workspaceId'        => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fuzzyMatching) {
            $res['FuzzyMatching'] = $this->fuzzyMatching;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pipelineIdentifier) {
            $res['PipelineIdentifier'] = $this->pipelineIdentifier;
        }
        if (null !== $this->pipelineProvider) {
            $res['PipelineProvider'] = $this->pipelineProvider;
        }
        if (null !== $this->pipelineVersion) {
            $res['PipelineVersion'] = $this->pipelineVersion;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FuzzyMatching'])) {
            $model->fuzzyMatching = $map['FuzzyMatching'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PipelineIdentifier'])) {
            $model->pipelineIdentifier = $map['PipelineIdentifier'];
        }
        if (isset($map['PipelineProvider'])) {
            $model->pipelineProvider = $map['PipelineProvider'];
        }
        if (isset($map['PipelineVersion'])) {
            $model->pipelineVersion = $map['PipelineVersion'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
